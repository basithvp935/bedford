@extends('admin.layouts.app', [
    'title' => __('Admission Applications'),
    'parentSection' => '',
    'elementName' => 'admission_applications'
])

@section('title', 'View Admission Application')

@section('content')
@component('admin.layouts.headers.auth')
    @component('admin.layouts.headers.breadcrumbs')
        @slot('title')
            {{ __('Admission Applications') }}
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('admin::admission_applications.index') }}">{{ __('Admission Applications') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('View') }}</li>
    @endcomponent
@endcomponent

@php
    // Helper to render a labelled value row
    $val = function ($v) {
        return ($v !== null && $v !== '') ? e($v) : '—';
    };
@endphp

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Application') }} #{{ $application->id }} — {{ $application->student_name }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin::admission_applications.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="heading-small text-muted mb-3">Student Profile</h6>
                    <div class="pl-lg-4 mb-4">
                        <div class="row">
                            <div class="col-md-4 mb-2"><strong>Name:</strong> {!! $val($application->student_name) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Nationality:</strong> {!! $val($application->nationality) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Gender:</strong> {!! $val($application->gender) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Passport No:</strong> {!! $val($application->student_passport) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Passport Expiry:</strong> {!! $val($application->student_passport_expiry) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Res. Visa No:</strong> {!! $val($application->res_visa_no) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Visa Expiry:</strong> {!! $val($application->res_visa_expiry) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Age:</strong> {!! $val($application->age) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Blood Group:</strong> {!! $val($application->blood_group) !!}</div>
                            <div class="col-md-6 mb-2"><strong>Home Language(s):</strong> {!! $val($application->home_languages) !!}</div>
                            <div class="col-md-6 mb-2"><strong>Previous School:</strong> {!! $val($application->previous_school) !!}</div>
                            <div class="col-md-6 mb-2"><strong>Medical Conditions:</strong> {!! $val($application->medical_conditions) !!}</div>
                            <div class="col-md-6 mb-2"><strong>Allergies:</strong> {!! $val($application->allergies) !!}</div>
                            <div class="col-md-6 mb-2"><strong>EpiPen Details:</strong> {!! $val($application->epipen_details) !!}</div>
                            <div class="col-md-6 mb-2"><strong>Learning Difficulty / IEP:</strong> {!! $val($application->learning_difficulty) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Transport:</strong> {!! $val($application->transport_facility) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Area of Residence:</strong> {!! $val($application->area_of_residence) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Boarding Point:</strong> {!! $val($application->boarding_point) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Pin Number:</strong> {!! $val($application->pin_number) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Street Number:</strong> {!! $val($application->street_number) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Building Number:</strong> {!! $val($application->building_number) !!}</div>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-3">Sibling Details</h6>
                    <div class="pl-lg-4 mb-4">
                        @if(!empty($application->siblings) && is_array($application->siblings))
                            <ul class="mb-0">
                                @foreach($application->siblings as $sibling)
                                    <li>
                                        {{ $sibling['name'] ?? '—' }}
                                        @if(!empty($sibling['reg']))
                                            <span class="text-muted">(Reg: {{ $sibling['reg'] }})</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="mb-0 text-muted">No siblings listed.</p>
                        @endif
                    </div>

                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-3">Parent Details</h6>
                    <div class="pl-lg-4 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Father / Guardian</h5>
                                <p class="mb-1"><strong>Name:</strong> {!! $val($application->father_name) !!}</p>
                                <p class="mb-1"><strong>Mobile:</strong> {!! $val($application->father_mobile) !!}</p>
                                <p class="mb-1"><strong>Email:</strong> {!! $val($application->father_email) !!}</p>
                                <p class="mb-1"><strong>Passport:</strong> {!! $val($application->father_passport) !!}</p>
                                <p class="mb-1"><strong>Passport Expiry:</strong> {!! $val($application->father_passport_expiry) !!}</p>
                                <p class="mb-1"><strong>Residence/National ID:</strong> {!! $val($application->father_eid) !!}</p>
                                <p class="mb-1"><strong>ID Expiry:</strong> {!! $val($application->father_eid_expiry) !!}</p>
                                <p class="mb-1"><strong>Occupation:</strong> {!! $val($application->father_occupation) !!}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Mother</h5>
                                <p class="mb-1"><strong>Name:</strong> {!! $val($application->mother_name) !!}</p>
                                <p class="mb-1"><strong>Mobile:</strong> {!! $val($application->mother_mobile) !!}</p>
                                <p class="mb-1"><strong>Email:</strong> {!! $val($application->mother_email) !!}</p>
                                <p class="mb-1"><strong>Passport:</strong> {!! $val($application->mother_passport) !!}</p>
                                <p class="mb-1"><strong>Passport Expiry:</strong> {!! $val($application->mother_passport_expiry) !!}</p>
                                <p class="mb-1"><strong>Residence/National ID:</strong> {!! $val($application->mother_eid) !!}</p>
                                <p class="mb-1"><strong>ID Expiry:</strong> {!! $val($application->mother_eid_expiry) !!}</p>
                                <p class="mb-1"><strong>Occupation:</strong> {!! $val($application->mother_occupation) !!}</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-3">Emergency Contacts</h6>
                    <div class="pl-lg-4 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Contact 1</h5>
                                <p class="mb-1"><strong>Name:</strong> {!! $val($application->emerg1_name) !!}</p>
                                <p class="mb-1"><strong>Relation:</strong> {!! $val($application->emerg1_relation) !!}</p>
                                <p class="mb-1"><strong>Phone:</strong> {!! $val($application->emerg1_phone) !!}</p>
                                <p class="mb-1"><strong>Authorized:</strong> {!! $val($application->emerg1_authorized) !!}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Contact 2</h5>
                                <p class="mb-1"><strong>Name:</strong> {!! $val($application->emerg2_name) !!}</p>
                                <p class="mb-1"><strong>Relation:</strong> {!! $val($application->emerg2_relation) !!}</p>
                                <p class="mb-1"><strong>Phone:</strong> {!! $val($application->emerg2_phone) !!}</p>
                                <p class="mb-1"><strong>Authorized:</strong> {!! $val($application->emerg2_authorized) !!}</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-3">Consent</h6>
                    <div class="pl-lg-4 mb-4">
                        <div class="row">
                            <div class="col-md-4 mb-2"><strong>School use:</strong> {!! $val($application->consent_school_use) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Website/Social:</strong> {!! $val($application->consent_web_media) !!}</div>
                            <div class="col-md-4 mb-2"><strong>Printed materials:</strong> {!! $val($application->consent_printed) !!}</div>
                            <div class="col-md-12 mb-2"><strong>First aid consent:</strong> {!! $val($application->consent_first_aid) !!}</div>
                            <div class="col-md-12 mb-2"><strong>How did you know about us:</strong> {!! $val($application->source) !!}</div>
                            <div class="col-md-12 mb-2"><strong>Submitted on:</strong> {{ optional($application->created_at)->format('d/m/Y h:i A') }}</div>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-3">Documents</h6>
                    <div class="pl-lg-4 mb-2">
                        @php
                            $docs = [
                                'Child Passport' => $application->child_passport_doc,
                                'Child Residence/National ID' => $application->child_residence_doc,
                                'Child Photograph' => $application->child_photo_doc,
                                'Father Document' => $application->father_doc,
                                'Mother Document' => $application->mother_doc,
                                'Immunization Record' => $application->immunization_doc,
                            ];
                        @endphp
                        <ul class="mb-0">
                            @foreach($docs as $label => $path)
                                <li class="mb-1">
                                    <strong>{{ $label }}:</strong>
                                    @if($path)
                                        <a href="{{ url('upload/' . $path) }}" target="_blank" rel="noopener">View / Download</a>
                                    @else
                                        <span class="text-muted">Not uploaded</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.footers.auth')
</div>
@endsection
