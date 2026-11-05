<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use App\Models\Career;

use App\Models\Department;
use App\Models\Founder;
use App\Models\DigitalFestival;
use App\Models\MissionVision;
use App\Models\QualityEducation;
use App\Models\CareerQualification;
use App\Models\Qualification;
use App\Models\QualificationCategory;
use App\Models\QualityEducationCategory;
use App\Models\Testimonial;
use App\Models\Page;
use App\Models\VideoGallery;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\OtherBanner;
use App\Models\Facility;
use App\Models\HomeBanner;
use App\Models\President;
use App\Models\HomePage;
use App\Models\AboutUs;
use App\Models\Aim;
use App\Models\News;
use App\Models\Resource;
use App\Models\AcademicResource;
use App\Models\Alumni;
use App\Models\CareerApplication;
use Mail;
use App\Mail\contactUsMail;
use App\Mail\EnquiryMailToAdmin;
use App\Mail\CareerApplicationMail;
use App\Models\Academic;
use App\Models\AcademicCalendar;
use App\Models\Mentoring;
use App\Models\Circular;
use App\Models\Gallery;
use App\Models\Admission;
use App\Models\AdmissionApplication;
use App\Models\TransferCertificate;
use App\Models\AlumniRegistration;
use App\Models\Ambassador;
use App\Models\EventCalendar;
use App\Models\Fact;
use Storage;
use Redirect;
use App\Models\Faculty;
use App\Models\Happening;
use App\Models\IsgInternational;
use App\Models\ManagementCommitty;
use App\Models\QuestionPaper;
use App\Models\Syllabus;
use Illuminate\Support\Str;
use Illuminate\Cache\RateLimiting\Limit;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;
use App\Models\Notice;
use App\Models\Affiliation;
use App\Models\FeesStructure;

class HomeController extends Controller
{
    public function index()
    {
        $HappeningRecords = Happening::orderby('created_at', 'desc')->limit(6)->get();
        $notices = Notice::orderBy('date', 'asc')->get();
        $flashNews = News::where('flash',1)->first();
        $HappeningGroups = [];

        foreach ($HappeningRecords as $record) {
            $date = $record->date;
            if (!isset($HappeningGroups[$date])) {
                $HappeningGroups[$date] = [];
            }
            $HappeningGroups[$date][] = $record;
        }
        $date = today()->format('Y-m-d');

        return view('front.index', [
            'flash_news' =>$flashNews,
            'quality_educations' => QualityEducation::orderby('id', 'desc')->get(),
            'banners' => HomeBanner::orderby('orders', 'asc')->get(),
            'newses' => News::limit(4)->orderby('news_date', 'desc')->get(),
            'ambassadors' => Ambassador::orderby('orders', 'asc')->get(),
            'president' => President::find(1),
            'about' => AboutUs::find(1),
            'notices'=>$notices,
            'home_page' => HomePage::find(1),
            'isg_international'=>IsgInternational::find(1),
            'galleries' => Gallery::orderby('created_at', 'desc')->limit(4)->get(),
            'facilities' => Facility::limit(3)->orderBy('priority','asc')->get(),
            'HappeningGroups' => $HappeningGroups,
            'happening_groups' => $HappeningGroups,
            'facts' => Fact::orderby('orders', 'asc')->get(),
            'academic_calendars' => AcademicCalendar::orderby('date', 'asc')->where('date', '>=', $date)->get(),

        ]);
    }

    public function syllabuses()
    {

        $syllabusRecords = Syllabus::orderby('created_at', 'desc')->get();

        $syllabusGroups = [];

        foreach ($syllabusRecords as $record) {
            $title = $record->title;
            if (!isset($syllabusGroups[$title])) {
                $syllabusGroups[$title] = [];
            }
            $syllabusGroups[$title][] = $record;
        }

        return view('front.syllabuses', [
            'syllabusGroups' => $syllabusGroups,
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }


    public function questionPapers()
    {

        $syllabusRecords = QuestionPaper::orderby('created_at', 'desc')->get();

        $syllabusGroups = [];

        foreach ($syllabusRecords as $record) {
            $title = $record->title;
            if (!isset($syllabusGroups[$title])) {
                $syllabusGroups[$title] = [];
            }
            $syllabusGroups[$title][] = $record;
        }

        return view('front.question-papers', [
            'syllabusGroups' => $syllabusGroups,
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }

    public function news()
    {
        return view('front.newses', [
            'newses' => News::orderby('orders', 'asc')->get(),
        ]);
    }

    public function eventCalendarDetails(EventCalendar $event_calendar)
    {
        return view('front.event_calendar_details', [
            'event_calendar' => $event_calendar
        ]);
    }

    public function newsDetails(News $news)
    {
        return view('front.news_details', [
            'news' => $news
        ]);
    }

    // public function aims()
    // {
    //     return view('front.aims', [
    //         'aims' => Aim::find(1),
    //         'newses' => News::orderby('news_date', 'desc')->get(),
    //       'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
    //     ]);
    // }

    // public function founder()
    // {
    //     return view('front.founder', [
    //         'founder' => Founder::find(1),
    //         'newses' => News::orderby('news_date', 'desc')->get(),
    //       'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
    //     ]);
    // }
    // public function principal()
    // {
    //     return view('front.principal', [
    //         'principal' => Principal::find(1),
    //       'newses' => News::orderby('news_date', 'desc')->get(),
    //       'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
    //     ]);
    // }

    public function managementCommittee()
    {
        return view('front.management_committees', [
            'management_committees' => ManagementCommitty::orderby('orders', 'asc')->get(),
        ]);
    }

    public function faculties()
    {
        return view('front.faculties', [
            //'faculties' => Faculty::orderby('orders', 'asc')->with(['department'])->get(),
            'departments' => Department::with(['faculties'])->orderby('priority')->get(),
        ]);
    }

    public function school_timings()
    {
        return view('front.school_timings',[
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
           'other_banner' => OtherBanner::find(1),
        ]);
    }

    public function methodology()
    {
        return view('front.methodology', [
            'methodologys' => Methodology::find(1),
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }

    public function facilities()
    {
        return view('front.facilities', [
            'facilities' => Facility::orderBy('priority', 'asc')->get(),
        ]);
    }

    public function mentoring()
    {
        return view('front.mentoring', [
            'mentoring' => Mentoring::find(1),
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }

    public function roundSquare()
    {
        return view('front.round_square', [
            'round_square' => RoundSquare::find(1),
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }



    public function activityHubs(ActivityHub $activity_hub)
    {
        return view('front.activity_hub', [
             'founder' => Founder::find(1),
            'activity_hub' => $activity_hub,
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }

    public function circulars()
    {

        return view('front.circulars', [
            'circulars' => Circular::orderby('id', 'desc')->paginate(6),
            'newses' => News::orderby('news_date', 'desc')->get(),
        ]);
    }

    public function publications()
    {
        $publications = Publication::select('year')->groupBy('year')->get();
        return view('front.publications', [
            'publications' => $publications->groupBy('year'),
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }

    public function publicationDetails($year)
    {
        $publications = Publication::where('year',$year)->get();
        return view('front.publication_details', [
            'publications' => $publications,
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }

    public function photo_gallery()
    {
        return view('front.gallery', [
            'galleries' => Gallery::latest()->get(),
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }

    public function photoGalleryDetails(Gallery $gallery)
    {
        return view('front.photo_gallery_details', [
            'gallery' => $gallery,
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }

    public function video_gallery()
    {
        return view('front.video_galleries', [
            'video_galleries' => Gallery::where('type', 'Video')->orderby('orders', 'asc')->paginate(6),
            'newses' => News::orderby('news_date', 'desc')->get(),
           'video_gallery_latest' => Gallery::where('type', 'Video')->latest()->first(),
        ]);
    }
    public function admission()
    {
        return view('front.admission', [
            'admission' => Admission::find(1),
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }

    /**
     * Persist online admission form submission + uploaded documents.
     */
    public function admissionStore(Request $request)
    {
        $this->validate($request, [
            'student_name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'gender' => 'required|string|max:20',
            'age' => 'required',
            'father_name' => 'required|string|max:255',
            'father_mobile' => 'required|string|max:50',
            'mother_name' => 'required|string|max:255',
            'mother_mobile' => 'required|string|max:50',
            'consent_first_aid' => 'required|string|max:100',
            'child_passport_doc' => 'nullable|file|mimes:jpeg,jpg,png,pdf|max:5120',
            'child_residence_doc' => 'nullable|file|mimes:jpeg,jpg,png,pdf|max:5120',
            'child_photo_doc' => 'nullable|file|mimes:jpeg,jpg,png,pdf|max:5120',
            'father_doc' => 'nullable|file|mimes:jpeg,jpg,png,pdf|max:5120',
            'mother_doc' => 'nullable|file|mimes:jpeg,jpg,png,pdf|max:5120',
            'immunization_doc' => 'nullable|file|mimes:jpeg,jpg,png,pdf|max:5120',
        ]);

        try {
            // Build sibling list from parallel arrays
            $siblings = [];
            $regs = $request->input('sibling_reg', []);
            $names = $request->input('sibling_name', []);
            $count = max(count((array) $regs), count((array) $names));
            for ($i = 0; $i < $count; $i++) {
                $reg = trim($regs[$i] ?? '');
                $name = trim($names[$i] ?? '');
                if ($reg === '' && $name === '') {
                    continue;
                }
                $siblings[] = ['reg' => $reg, 'name' => $name];
            }

            $data = $request->only([
                'student_name', 'nationality', 'gender', 'student_passport', 'student_passport_expiry',
                'res_visa_no', 'res_visa_expiry', 'age', 'blood_group', 'home_languages', 'previous_school',
                'medical_conditions', 'allergies', 'epipen_details', 'learning_difficulty',
                'transport_facility', 'area_of_residence', 'boarding_point', 'pin_number', 'street_number', 'building_number',
                'father_name', 'father_mobile', 'father_email', 'father_passport', 'father_passport_expiry',
                'father_eid', 'father_eid_expiry', 'father_occupation',
                'mother_name', 'mother_mobile', 'mother_email', 'mother_passport', 'mother_passport_expiry',
                'mother_eid', 'mother_eid_expiry', 'mother_occupation',
                'emerg1_name', 'emerg1_relation', 'emerg1_phone', 'emerg1_authorized',
                'emerg2_name', 'emerg2_relation', 'emerg2_phone', 'emerg2_authorized',
                'consent_school_use', 'consent_web_media', 'consent_printed', 'consent_first_aid', 'source',
            ]);
            $data['siblings'] = $siblings;

            $application = AdmissionApplication::create($data);

            // Store uploaded documents under public/upload/admission-applications
            $fileFields = [
                'child_passport_doc',
                'child_residence_doc',
                'child_photo_doc',
                'father_doc',
                'mother_doc',
                'immunization_doc',
            ];
            foreach ($fileFields as $field) {
                if ($request->hasFile($field)) {
                    $application->{$field} = $request->file($field)->store('admission-applications', 'uploads');
                }
            }
            $application->save();
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong.', 'alert-type' => 'warning');
            return redirect()->back()->with($notification)->withInput();
        }

        $notification = array('message' => 'Your admission application has been submitted successfully.', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    
    public function admissionProcedure()
    {
        return view('front.admission-procedure', [
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }

    public function tc()
    {
        return view('front.tc');
    }

    public function getTc(Request $request)
    {
        $dob = $request->year . '' . $request->month . '' . $request->date;
        $tc = TransferCertificate::where('gr_number', $request->gr_number)->where('dob', $dob)->first();

        if ($tc != '') {


            return view('front.tc',[
                'tc'=>$tc
            ]);



        } else {
            $notification = array('message' => 'Something went wrong.', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
    }



    public function aboutUs()
    {
        return view('front.abou_us', [
            'misson_vision' => MissionVision::first(),
            'abou_us' => AboutUs::find(1),
            'galleries' => Gallery::orderby('created_at', 'asc')->get(),
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }

    public function academics()
    {
        return view('front.academics', [
            'academicData' => AcademicResource::all(),
            'academic' => Academic::find(1),
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }



//-----jamsheer edit---


public function theBrightThread()
    {
        return view('front.the-bright-thread');
    }
    public function whyChooseUs()
    {
        return view('front.why-choose-us');
    }
    
   public function careers()
    {
        $qualifications = Qualification::all();
        $qualificationCategories = QualificationCategory::all();
        $careers =  Career::orderby('created_at', 'desc')->get();
        
        foreach($careers as $career){
                $career['qualification'] = CareerQualification::where('career', $career->id)->get();
        }
        
        return view('front.careers', compact('careers', 'qualifications', 'qualificationCategories'));
    }
   public function careerstest()
    {
        $qualifications = Qualification::all();
        $qualificationCategories = QualificationCategory::all();
        $careers =  Career::orderby('created_at', 'desc')->get();
        foreach($careers as $career){
                $career['qualification'] = CareerQualification::where('career', $career->id)->get();
        }
        
        echo '<pre>';
        print_r($careers);
        echo '</pre>';
        // return view('front.careers', compact('careers', 'qualifications', 'qualificationCategories'));
    }
   public function getcareerQualifications($id)
    {
        $qualifications['qualificatons'] = CareerQualification::where('career_qualifications.career', $id)->join('qualifications', 'qualifications.id', '=', 'career_qualifications.qualification')->get();
        $qualifications['career'] = Career::find($id);
        
        return json_encode($qualifications);
    }
//------end jamsheer edit
    public function contactUs()
    {
        return view('front.contact',[
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
            ]);
    }

    public function contactUsStore(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|min:3|max:25',
            'message' => 'required|string|min:3',
            'class' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            //'g-recaptcha-response' => 'required',
        ]);

        // $captcha = $_POST['g-recaptcha-response'];
        // if (!$this->googleCaptachCheck($captcha)) {
        //     $notification = array('message' => 'Invalid Captcha!', 'alert-type' => 'warning');
        //     return redirect()->back()->with($notification);
        // }
        try {
            $contact =  Contact::create([
                'name' => $request->name,
                'class' => $request->class,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
            
            
           
            //Mail::to(env('MAIL_TO'))->send(new contactUsMail($contact->toarray()));
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong.', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $notification = array('message' => 'Your request has been submitted successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }





    public function getGallery(Request $request)
    {

        return view('front.gallery', [
            'galleries' => Gallery::orderby('created_at', 'asc')->get(),
        ]);
    }



    public function alumniRegistrations()
    {
        return view('front.alumni_registrations');
    }

    public function alumniRegistrationStore(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|min:3|max:25',
            'whatsapp_number' => 'required|numeric',
            'year_of_passing' => 'required',
            'email' => 'required|email',
            //'g-recaptcha-response' => 'required',
        ]);

        // $captcha = $_POST['g-recaptcha-response'];
        // if (!$this->googleCaptachCheck($captcha)) {
        //     $notification = array('message' => 'Invalid Captcha!', 'alert-type' => 'warning');
        //     return redirect()->back()->with($notification);
        // }
        try {
            $alumni_registration =  AlumniRegistration::create([
                'name' => $request->name,
                'whatsapp_number' => $request->whatsapp_number,
                'email' => $request->email,
                'year_of_passing' => $request->year_of_passing,
                'employer' => $request->employer,
                'name_of_educational_institution' => $request->name_of_educational_institution,
            ]);
            if ($request->hasFile('photo')) {
                $alumni_registration->photo = $request->file('photo')->store('alumni', 'uploads');
                $alumni_registration->save();
            }

            //Mail::to(env('MAIL_USERNAME'))->send(new contactUsMail($alumni_registration->toarray()));
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong.', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $notification = array('message' => 'Your request has been submitted successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }



    function googleCaptachCheck($recaptcha)
    {
        $secret = env('RecaptchaSecret');
        $credential = array(
            'secret' => $secret,
            'response' => $recaptcha,
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);

        $status = json_decode($response, true);
        if ($status['success']) {
            return true;
        } else {
            return false;
        }
    }


    public function faq()
    {
        return view('front.faq', [
            'home_page' => HomePage::find(1),
            'tc'=>''
        ]);
    }

    public function getfaq(Request $request)
    {
        $dob = $request->year . '' . $request->month . '' . $request->date;
        $tc = TransferCertificate::where('gr_number', $request->gr_number)->where('dob', $dob)->first();

        if ($tc != '') {


            return view('front.faq',[
                'tc'=>$tc,
                'home_page' => HomePage::find(1),
            ]);



        } else {
            $notification = array('message' => 'Something went wrong.', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
    }

    public function EnquiryStore(Request $request)
    {


        $this->validate($request, [
            'subject' => 'required',
            'message' => 'required|string|min:3',
            //'g-recaptcha-response' => 'required',
        ]);

        // $captcha = $_POST['g-recaptcha-response'];
        // if (!$this->googleCaptachCheck($captcha)) {
        //     $notification = array('message' => 'Invalid Captcha!', 'alert-type' => 'warning');
        //     return redirect()->back()->with($notification);
        // }
        try {
            $contact =  Enquiry::create([
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            //Mail::to(env('MAIL_TO'))->send(new contactUsMail($contact->toarray()));
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong.', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $notification = array('message' => 'Your request has been submitted successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }


    public function videoGallery()
    {
        $videoGallery = VideoGallery::all();
        return view('front.new.video_gallery',compact('videoGallery'));
    }

    public function qualityEducation($id)
    {
        $data = QualityEducationCategory::with(['images','videos'])->get();
        //$quality = QualityEducation::where('id',$id)->with(['images','videos'])->first();
        $quality = QualityEducation::find($id);
        return view('front.new.quality_education',compact('quality','data'));
    }

    public function founder()
    {
        $founder = President::find(2);
        return view('front.new.founder',compact('founder'));
    }
    public function president()
    {
        $founder = President::find(1);
        return view('front.new.founder',compact('founder'));
    }
    public function principal()
    {
        $founder = President::find(3);
        return view('front.new.founder',compact('founder'));
    }

    public function vice_principal()
    {
        $founder = President::find(4);
        return view('front.new.founder',compact('founder'));
    }
    public function missonVision()
    {
        $missonVision = MissionVision::first();
        return view('front.new.misson_vision',compact('missonVision'));
    }
    public function aims()
    {
        return view('front.new.aims');
    }
    public function studentCouncil()
    {
        return view('front.new.student_council');
    }

    public function prefectorialBody()
    {
        return view('front.new.prefectorial_body');
    }
    public function sportsGames()
    {
        return view('front.new.sports_games');
    }
    public function pages()
    {
        $page = Page::where('url',last(request()->segments()))->firstOrFail();
        return view('front.dynamic_page',compact('page'));
    }
    public function houses()
    {
        return view('front.new.houses');
    }
    
    public function careerStore(Request $request)
    {

        $status = "0";
        $message = "";
        $errors = '';
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|string|min:3|max:25',
                'email' => 'required|string|min:3',
                'phone' => 'required',
                'notice_period' => 'required',
            ]
        );
        if ($validator->fails()) {
            $status = "0";
            $message = "Validation error occured";
            $errors = $validator->messages();
        } else {

            $captcha = $_POST['g-recaptcha-response'];
            if (!$this->googleCaptachCheck($captcha)) {
                $status = "0";
                $message = "Invalid Captcha!";
                $errors = '';
                echo json_encode(['status' => $status, 'message' => $message, 'errors' => $errors]);die();
            }
            if ($file = $request->file("cv")) {
                $dir = 'uploads/cv';
                $file_name = time() . uniqid() . "_cv." . $file->getClientOriginalExtension();
                $file->move($dir, $file_name);
                $ins['cv'] = $file_name;
                    
                    
                // $cv = $request->file('cv')->store('cv', 'uploads');
                // $cv->save();
                // $ins['cv'] = $cv;
            }
            $ins['name'] = $request->name;
            $ins['career_id'] = $request->career_id;
            
            $career = Career::find($request->career_id);
            
            $ins['email'] = $request->email;
            $ins['phone'] = $request->phone;
            $ins['years_experience'] = $request->years_experience;
            $ins['qualification'] = $request->qualification;
            $ins['position_looking_for'] = ($career->category == '1') ? $request->position_looking_for : '';
            // $ins['remark'] = $request->remark;
            $ins['notice_period'] = $request->notice_period;
            $ins['exp_ctc'] = $request->exp_ctc;
            $ins['cur_ctc'] = $request->cur_ctc;
            $ins['created_at'] = date('Y-m-d H:i:s');

            if (CareerApplication::insert($ins)) {
                $status = "1";
                $message = "Successfully submitted.. We will contect you soon";
                $errors = '';
            } else {
                $status = "0";
                $message = "Something went wrong";
                $errors = '';
            }
            echo json_encode(['status' => $status, 'message' => $message, 'errors' => $errors]);die();

        }
    }
    
    
     public function resources(Request $request){
         
        $resourceData = Resource::all();
        $circularData = Circular::select('date','title','pdf')->get()->toArray();
        $affiliationData = Affiliation::select('title', 'pdf')->get()->toArray();
        $feeStructure = FeesStructure::select('title','pdf')->get()->toArray();

        return view('front.resource', compact('resourceData', 'affiliationData','circularData','feeStructure'));
    }
    

    public function resourcesParents(Request $request){

        return view('front.resources_parents');
    }

    public function resourcesStudents(Request $request){

        return view('front.resources_students');
    }
    
       public function feesStructure(Request $request){
      
            return view('front.fees');
      
    }
   
    
     public function feeStructure(Request $request){


        $feeStructure = FeesStructure::select('title','pdf')->get()->toArray();

        return view('front.fee', compact('feeStructure'));
    }
    
      public function feePayment(Request $request){
        
          return view('front.fee_payment', [
            'academic' => Academic::find(1),
            'newses' => AcademicCalendar::orderby('date', 'desc')->Limit(3)->get(),
        ]);
    }
    
     public function publicDisclosur(Request $request){

        return view('front.public-disclosur');
    }

    public function aboutSchool(Request $request){

        return view('front.about-school');
    }
    
     public function career(Request $request){

        return view('front.career');
    }
    
    
      public function digitalfestival(Request $request){

        return view('front.digitalfestival', [
            'festival' => DigitalFestival::orderBy('id', 'desc')->get(),
        ]);
    }
    
    
       public function applicationform(Request $request){

        return view('front.applicationform');
    }

   public function values(Request $request){

        return view('front.values');
    }


    
}
