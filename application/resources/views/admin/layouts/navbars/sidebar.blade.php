<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('admin::dashboard') }}">
                <img src="{{ asset('Front/images/logo/logo.png')}}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item {{ $elementName == 'dashboards' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('admin::dashboard') }}" >
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{ __('Dashboard') }}</span>
                        </a>
                    </li>


                    @can('manage-users', App\User::class)
                    <li class="nav-item {{ $elementName == 'banners' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::banners.index') }}">
                            <i class="ni ni-collection text-info text-sm opacity-10 text-green"></i>
                            <span class="nav-link-text">{{ __('Banners') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $elementName == 'news' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::news.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('News') }}</span>
                        </a>
                    </li>
                    
                    <li class="nav-item {{ $elementName == 'notices' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::notice.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Notice') }}</span>
                        </a>
                    </li>
                     <li class="nav-item {{ $elementName == 'careers' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::careers.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Careers</span>
                        </a>
                    </li>
                    
                    <li class="nav-item {{ $elementName == 'career_applications' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::career_applications.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Career Applications</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $elementName == 'admission_applications' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::admission_applications.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Admission Applications</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $elementName == 'qualification' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::qualification.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Qualifications</span>
                        </a>
                    </li>

                    <!--<li class="nav-item {{ $elementName == 'happenings' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::happenings.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Happenings') }}</span>
                        </a>
                    </li>-->

                    <li class="nav-item {{ $elementName == 'alumni-registrations' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::alumni-registrations.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Alumni Registrations') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $elementName == 'enquiries' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::enquiries') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Enquiries') }}</span>
                        </a>
                    </li>
                     <li class="nav-item {{ $elementName == 'resource' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::resource.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Resource</span>
                        </a>
                    </li>
                     <li class="nav-item {{ $elementName == 'academic_resource' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::academic_resource.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Academic Resource</span>
                        </a>
                    </li>

                    <!--<li class="nav-item {{ $elementName == 'academic_calendars' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::academic_calendars.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Academic Calendars') }}</span>
                        </a>
                    </li>-->

                    <!--<li class="nav-item {{ $elementName == 'event_calendars' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::event_calendars.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Event Calendars') }}</span>
                        </a>-->
                    </li>
                    <!--<li class="nav-item {{ $elementName == 'ambassadors' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::ambassadors.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Ambassadors') }}</span>
                        </a>
                    </li>-->
                    <!--<li class="nav-item {{ $elementName == 'isg_internationals' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::isg_internationals') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Isg Internationals') }}</span>
                        </a>
                    </li>-->
                        <!--<li class="nav-item {{ $elementName == 'quality-education' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('isgi-admin/quality-education') }}">
                                <i class="ni ni-app text-dark text-sm text-green"></i>
                                <span class="nav-link-text">{{ __('Quality Education') }}</span>
                            </a>
                        </li>-->
                    <li class="nav-item {{ $elementName == 'facilities' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::facilities.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Facilities') }}</span>
                        </a>
                    </li>

                    <li class="nav-item {{ $elementName == 'digital_festivals' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::digital_festival.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">Digital Festivals'</span>
                        </a>
                    </li>
                    
                    <!--<li class="nav-item {{ $elementName == 'faq' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::faq') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('FAQ') }}</span>
                        </a>
                    </li>-->
                    
                       <li class="nav-item {{ $elementName == 'fees-structure' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin::fees-structures.index') }}">
                            <i class="ni ni-app text-dark text-sm text-green"></i>
                            <span class="nav-link-text">{{ __('Fees Structure') }}</span>
                        </a>
                    </li>
                    
                    <li class="nav-item {{ $parentSection == 'pages' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-pages" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'pages' ? 'true' : '' }}"
                            aria-controls="navbar-pages">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10 text-green"></i>
                            <span class="nav-link-text">{{ __('Pages') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'pages' ? 'show' : '' }}"
                            id="navbar-pages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'about_us' ? 'active' : '' }}">
                                    <a href="{{ route('admin::about_us') }}"
                                        class="nav-link">{{ __('About Us') }}</a>
                                </li>
                                <!--<li class="nav-item {{ $elementName == 'academics' ? 'active' : '' }}">
                                    <a href="{{ route('admin::academics') }}"
                                        class="nav-link">{{ __('Academics') }}</a>
                                </li>-->
                                <li class="nav-item {{ $elementName == 'home_page' ? 'active' : '' }}">
                                    <a href="{{ route('admin::home_page') }}"
                                        class="nav-link">{{ __('Home page') }}</a>
                                </li>
                                <!--<li class="nav-item {{ $elementName == 'facts' ? 'active' : '' }}">
                                    <a href="{{ route('admin::facts.index') }}"
                                        class="nav-link">{{ __('Facts') }}</a>
                                </li>-->


                                <!--<li class="nav-item {{ $elementName == 'aims' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/page/1/edit') }}"
                                       class="nav-link">{{ __('Aims') }}   </a>
                                </li>-->

                                <!--<li class="nav-item {{ $elementName == 'student-council' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/page/2/edit') }}"
                                       class="nav-link">{{ __('Student ouncil') }}   </a>
                                </li>

                                <li class="nav-item {{ $elementName == 'prefectorial-body' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/page/2/edit') }}"
                                       class="nav-link">{{ __('Prefectorial body') }}   </a>
                                </li>


                                <li class="nav-item {{ $elementName == 'sports-games' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/page/2/edit') }}"
                                       class="nav-link">{{ __('Sports games') }}   </a>
                                </li>


                                <li class="nav-item {{ $elementName == 'co-curricular-activities' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/page/2/edit') }}"
                                       class="nav-link">{{ __('Co-curricular Activities') }}   </a>
                                </li>


                                <li class="nav-item {{ $elementName == 'houses' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/page/2/edit') }}"
                                       class="nav-link">{{ __('Houses') }}   </a>
                                </li>





                                <li class="nav-item {{ $elementName == 'quality-education' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/quality-education') }}"
                                       class="nav-link">{{ __('Quality Education') }}   </a>
                                </li>-->

                                <li class="nav-item {{ $elementName == 'mission-vision' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/mission-vision/1/edit') }}" class="nav-link">{{ __('Mission Vision') }}   </a>
                                </li>


                                <!-- <li class="nav-item {{ $elementName == 'other_banners' ? 'active' : '' }}">
                                    <a href="{{ route('admin::other_banners') }}"
                                        class="nav-link">{{ __('Other Banners') }}</a>
                                </li> -->

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'academics' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-academics" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'academics' ? 'true' : '' }}"
                            aria-controls="navbar-academics">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10 text-green"></i>
                            <span class="nav-link-text">{{ __('Academics') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'academics' ? 'show' : '' }}"
                            id="navbar-academics">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'syllabuses' ? 'active' : '' }}">
                                    <a href="{{ route('admin::syllabuses.index') }}"
                                        class="nav-link">{{ __('Syllabuses') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'question-papers' ? 'active' : '' }}">
                                    <a href="{{ route('admin::question-papers.index') }}"
                                        class="nav-link">{{ __('Question Papers') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'results' ? 'active' : '' }}">
                                    <a href="{{ route('admin::results.index') }}"
                                        class="nav-link">{{ __('Results') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'transfer-certificates' ? 'active' : '' }}">
                                    <a href="{{ route('admin::transfer-certificates.index') }}"
                                        class="nav-link">{{ __('TC') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    
                    
                    <li class="nav-item {{ $parentSection == 'resources' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-resources" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'resources' ? 'true' : '' }}"
                            aria-controls="navbar-resources">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10 text-green"></i>
                            <span class="nav-link-text">{{ __('Resources') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'affiliation' ? 'show' : '' }}"
                            id="navbar-resources">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'affiliation' ? 'active' : '' }}">
                                    <a href="{{ route('admin::affiliations.index') }}"
                                        class="nav-link">{{ __('Affiliation') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    
                    
                    <li class="nav-item {{ $parentSection == 'about_settings' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-about_settings" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'about_settings' ? 'true' : '' }}"
                            aria-controls="navbar-about_settings">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10 text-green"></i>
                            <span class="nav-link-text">{{ __('About') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'about_settings' ? 'show' : '' }}"
                            id="navbar-about_settings">
                            <ul class="nav nav-sm flex-column">
                                <!--<li class="nav-item {{ $elementName == 'president' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/president') }}"
                                        class="nav-link">{{ __('President') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'president' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/founder') }}"
                                       class="nav-link">{{ __('Founder') }}</a>
                                </li>-->


                                <li class="nav-item {{ $elementName == 'president' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/president') }}"
                                       class="nav-link">{{ __('Principal') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'president' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/vice-principal') }}"
                                       class="nav-link">{{ __('Vice Principal') }}</a>
                                </li>


                                <li class="nav-item {{ $elementName == 'admission' ? 'active' : '' }}">
                                    <a href="{{ route('admin::admission') }}"
                                        class="nav-link">{{ __('Admission') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'management-committees' ? 'active' : '' }}">
                                    <a href="{{ route('admin::management-committees.index') }}"
                                        class="nav-link">{{ __('Management Committees') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'faculties' ? 'active' : '' }}">
                                    <a href="{{ route('admin::faculties.index') }}"
                                        class="nav-link">{{ __('Faculties') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'department' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/department') }}"
                                       class="nav-link">{{ __('Department') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'media' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-media" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'media' ? 'true' : '' }}"
                            aria-controls="navbar-media">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10 text-green"></i>
                            <span class="nav-link-text">{{ __('Media') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'media' ? 'show' : '' }}"
                            id="navbar-media">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'circulars' ? 'active' : '' }}">
                                    <a href="{{ route('admin::circulars.index') }}"
                                        class="nav-link">{{ __('Circulars') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'gallerys' ? 'active' : '' }}">
                                    <a href="{{ route('admin::gallerys.index') }}"
                                        class="nav-link">{{ __('Gallerys') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'video-gallery' ? 'active' : '' }}">
                                    <a href="{{ url('isgi-admin/video-gallery') }}"
                                       class="nav-link">{{ __('Video Gallery') }}   </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    @endcan
                    <li class="nav-item {{ $parentSection == 'settings' ? 'active' : '' }}">
                        <a class="nav-link {{ $parentSection == 'settings' ? 'active' : '' }}" href="#navbar-examples"
                            data-toggle="collapse" role="button" aria-expanded="" aria-controls="navbar-examples">
                            <i class="ni ni-settings-gear-65" style="color: #f4645f;"></i>
                            <span class="nav-link-text" style="color: #f4645f;">{{ __('Settings') }}</span>
                        </a>
                        <div class="" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'profile' ? 'active' : '' }}">
                                    <a href="{{ route('admin::profile.edit') }}"
                                        class="nav-link">{{ __('Profile') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
