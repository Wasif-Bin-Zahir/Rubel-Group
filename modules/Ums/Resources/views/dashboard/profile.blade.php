@extends('admin.layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('common/css/resume.css') }}" />
@endsection

@section('content')
    <div class="container pt-2">
        <div class="row col-md-12 main">
            <section class="template" style="padding-bottom: 80px;">
                <div class="template-header-bg">
                    <div class="name-positions">
                        <h1 class="person-name">{{ $data->personalInfo->first_name }} {{ $data->personalInfo->last_name }}</h1>
                        <p>{{ $data->personalInfo->designation ?? "<DESIGNATION>" }}</p>
                    </div>
                </div>
                <div class="basic-details">
                    <img
                        src="{{ asset('images/default/avatar.jpg') }}"
                        alt=""
                        class="person-img"
                    />
                    <div class="about">
                        <div class="addresses">
                            <div class="address">
                                <i class="bx bx-location-plus icon"></i>
                                <span>{{ $data->residentialInfo->present_state ?? "<STATE>" }}, {{ $data->residentialInfo->present_country ?? "<COUNTRY>" }}</span>
                            </div>
                            <div class="address">
                                <i class="bx bx-phone icon"></i>
                                <span>{{ ($data->personalInfo->mobile_no ?? $data->personalInfo->phone_no) ?? "<MOBILE>" }}</span>
                            </div>
                            <div class="address">
                                <i class="bx bx-envelope icon"></i>
                                <span>{{ $data->personalInfo->personal_email ?? "<EMAIL>" }}</span>
                            </div>
                            <div class="address">
                                <i class="bx bx-world icon"></i>
                                <span>{{ $data->personalInfo->website_url ?? "<WEBSITE>" }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="resume-body">
                    <div class="career-objective">
                        <h4>About Myself</h4>
                        <p style="color: black">
                            {!! $data->personalInfo->about ?? "<ABOUT MYSELF>" !!}
                        </p>
                    </div>

                    <div class="skills-section">
                        <h4>Skills</h4>
                        <div class="skills">
                            @forelse($data->skillInfos as $skill)
                                <div class="skill">
                                    <div class="skill-details">
                                        <span class="skill-name">{{ $skill->name }}</span>
                                        <span class="skill-percentage">{{ ($skill->proficiency ?? 1) * 20 }}%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress progress-{{ $skill->proficiency ?? 1 }}"></div>
                                    </div>
                                </div>
                            @empty
                                {{ "<SKILL>" }}
                            @endforelse
                        </div>
                    </div>

                    <div class="job-experience">
                        <h4>Job Experiences</h4>
                        <ul class="experiences">
                            @forelse($data->workInfos as $work)
                                <li>
                                    <h5>
                                        <span class="position">{{ $work->designation }}</span>
                                        <span class="years">{{ \Carbon\Carbon::parse($work->start_date)->format('Y') }}-{{ $work->end_date ? \Carbon\Carbon::parse($work->start_date)->format('Y') : 'Present' }}</span>
                                    </h5>
                                    <h6>
                                        <span class="company-name">Company: {{ $work->company_name ?? 'N/A' }}</span>
                                        <span class="city font-weight-normal">Website: {{ $work->company_website ?? 'N/A' }}</span>
                                        <span class="city font-weight-normal">Address: {{ $work->company_address ?? 'N/A' }}</span>
                                    </h6>
                                </li>
                            @empty
                                {{ "<EXPERIENCE>" }}
                            @endforelse
                        </ul>
                    </div>

                    <div class="education-section">
                        <h4>Education</h4>
                        <ul class="education">
                            @forelse($data->educationalInfos as $education)
                                <li>
                                    <h5>
                                        <span class="degree">{{ $education->course_name }}</span>
                                    </h5>
                                    <span class="years">{{ \Carbon\Carbon::parse($education->start_date)->format('Y') }}-{{ $education->end_date ? \Carbon\Carbon::parse($education->start_date)->format('Y') : 'Present' }}</span>
                                    <h6>
                                        <span class="university-name">Institute: {{ $education->institute_name ?? 'N/A' }}</span>
                                        <span class="city font-weight-normal">Address: {{ $education->institute_address ?? 'N/A' }}</span>
                                        <span class="city font-weight-normal">Website: {{ $education->institute_website ?? 'N/A' }}</span>
                                    </h6>
                                </li>
                            @empty
                                {{ "<EDUCATION INFO>" }}
                            @endforelse
                        </ul>
                    </div>

                    <div class="skills-section">
                        <h4>Languages</h4>
                        <div class="skills">
                            @forelse($data->languages as $language)
                                <div class="skill">
                                    <div class="skill-details">
                                        <span class="skill-name">{{ $language->name }}</span>
                                        <span class="skill-percentage">{{ ($language->proficiency ?? 1) * 20 }}%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress progress-{{ $language->proficiency ?? 1 }}"></div>
                                    </div>
                                </div>
                            @empty
                                {{ "<LANGUAGE>" }}
                            @endforelse
                        </div>
                    </div>

                    <div class="skills-section">
                        <h4>Interests</h4>
                        @forelse($data->interests as $interest)
                            <div style="width: 100%; margin-top: 15px;">
                                <div class="skill" style="display: inline-block;">
                                    <span class="badge badge-secondary" style="padding: 10px 25px; margin-right: 10px; border-radius: 50px; background-color: #667eea">{{ $interest->name }}</span>
                                </div>
                            </div>
                        @empty
                            {{ "<LANGUAGE>" }}
                        @endforelse
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
