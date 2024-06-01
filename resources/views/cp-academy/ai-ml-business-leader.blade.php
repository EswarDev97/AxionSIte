@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area course-banner-section">
    <div class="container">
        <div class="col-lg-12">
            <ul class="breadcrumbs-link pt-3 pt-lg-5">
                <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                <li><a href="{{ (Route::has('cp-academy')) ? route('cp-academy') : 'not-found' }}">CP Academy</a></li>
                <li class="active">AI & ML For Business Leaders</li>
            </ul>
        </div>
    </div>

    <div class="breadcrumbs-wrapper bg_cover ai-class-manager-banner-img">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mt-5 mt-md-4 mt-lg-5 mb-5">
                        <div class="page-title-text text-left">
                            <h1 class="title">AI & ML For Business Leaders</h1>
                            <p class="text-white">Fraud detection | Churn Rate | Defaulters Prediction | Intrusion detection | No Code Auto ML</p>
                            <p class="text-white">Specially for CXOs, Managers, Team Leaders and Entrepreneurs</p>
                            <div class="text-center">
                                <h2 class="text-white mt-4">@ 1,100 <span class="text-sm text-strike opacity-light">2,999</span> <span class="text-sm">AED </span> <span class="offer-text">63% off</span></h2>   
                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="ml-lg-5 mt-1 main-btn text-white enroll-btn justify-content-center w-50" data-course="ai-ml-business-leader">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-2 mt-lg-0">
                        <div class="banner-enquiry-form-container bg-info pt-3 pb-3 border rounded">
                            <div class="col-lg-12">
                                <h3 class="text-center pb-3 text-white">Want to know more?</h3>
                                <p class="text-white pb-3 enquiry-para">We are glad to help you and we will connect with you within 24 hours.</p>
                                <form class="enquiry-form" method="post" enctype="multipart/form-data" action="{{ route('enquiry') }}">
                                    @csrf
                                    <input type="hidden" name="course" value="AI & ML For Business Leaders">
                                    <input type="hidden" name="enquiry_from" value="{{ url()->current() }}">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control text-only" id="enquiry-form-name" name="name" placeholder="Full Name *">
                                                <span class="form-field-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="email" class="form_control" id="enquiry-form-email" name="email" placeholder="Email Address *">
                                                <span class="form-field-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control numbers-only" id="enquiry-form-phone" name="phone" placeholder="Phone Number *">
                                                <span class="form-field-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <div class="text-center">
                                                    <button type="submit" class="main-btn btn-red">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->


<!--====== Start About AI Section ======-->
<section class="skill-area skill-style-two pt-80 pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> About Artificial Intelligence </h3>
            <div class="col-lg-12">
                <div class="row">
                    <p>
                        AI is driving innovations and transforming business across the work.  Many companies are developing solutions to make life easier with the help of big data, digital assistants and machine learning. The need for business process automation is leading the data scientists to new frontiers. AI will leave no stone unturned and bring unprecedented development. Do you have the aptitude to step in and lead AI operations from the front?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About AI Section ======-->

<!--====== Start Course Topic Section ======-->
<section class="skill-area skill-style-two pb-45">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-45"> Program Topic </h3>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="topic-container mb-110">
                            <div class="topic-img">
                                <img src="{{ url('assets/images/ai/img-1.jpg') }}" class="img-thumbnail" alt="ML & AI">
                            </div>                            
                            <div class="topic-text">
                                <h3>Machine Learning & AI Concepts</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="topic-container mb-110">
                            <div class="topic-img">
                                <img src="{{ url('assets/images/ai/img-3.jpg') }}" class="img-thumbnail" alt="Math Behind Building The AI Solutions">
                            </div>                            
                            <div class="topic-text">
                                <h3>Math Behind Building The AI Solutions</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="topic-container mb-110">
                            <div class="topic-img">
                                <img src="{{ url('assets/images/ai/img-4.jpg') }}" class="img-thumbnail" alt="Data Visualization">
                            </div>                            
                            <div class="topic-text">
                                <h3>Data Visualization</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="topic-container mb-110">
                            <div class="topic-img">
                                <img src="{{ url('assets/images/ai/img-5.jpg') }}" class="img-thumbnail" alt="Classification Algorithms">
                            </div>                            
                            <div class="topic-text">
                                <h3>Classification Algorithms</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="topic-container mb-110">
                            <div class="topic-img">
                                <img src="{{ url('assets/images/ai/img-6.jpg') }}" class="img-thumbnail" alt="Auto ML">
                            </div>                            
                            <div class="topic-text">
                                <h3>Auto ML (No Code Machine Learning)</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Course Topic Section ======-->

<!--====== Start Workshop Topic Section ======-->
<section class="skill-area skill-style-two pb-35">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> Highlights of the Program </h3>
            <div class="col-lg-12">
                <div class="row">
                    <p class="mb-2">
                        AI Everywhere! <i> If you don’t do something about AI, you will be left behind or disrupted into extinction </i> – this is a message that executives, Managers, Team Leaders and CXOs often hear.
                        Today, companies are faced with some compelling new choices, like robotic process automation (RPA), artificial intelligence (AI), machine learning (ML), blockchain and Industrial Internet of Things (IIoT), to name a few. Corporate Leaders have started working on understanding what these buzzwords mean and its relevance to their business and determining which technology to invest.
                    </p>
                    <p class="mb-2">
                        It is essential that Leaders have a foundational knowledge of digital transformation because they will rely on digital business to make their numbers. It will be hard for Leaders to lead digital initiatives if they don’t understand digital clearly. A lack of understanding can result in misdirection of efforts and painful experiences, and ultimately place the organizational transformation goals in jeopardy.
                    </p>
                    <p class="mb-2">
                        This course presents the concepts and technologies behind AI in a simple manner through examples and case studies. A comparison of AI with other technologies like Big Data, RPA, Cloud and Industry 4.0 is also provided.
                    </p>


                    <div class="col-lg-12 pl-0 pt-25">
                        <h4 class="text-uppercase pb-25">We will cover the following in this course:</h4>
                        <div class="text-wrapper">
                            <div class="faq-accordian">
                                <div class="accordion" id="accordianOne">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaOne" aria-expanded="false">
                                                What is AI and how it relates to other advanced technologies
                                            </a>
                                        </div>
                                        <div id="ajandaOne" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">What is AI</li>
                                                    <li class="check color-red-dark">Types of AI</li>
                                                    <li class="check color-red-dark">Goals of AI</li>
                                                    <li class="check color-red-dark">Applications of AI</li>
                                                    <li class="check color-red-dark">Pattern Recognition</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaTwo" aria-expanded="false">
                                                Technology behind AI
                                            </a>
                                        </div>
                                        <div id="ajandaTwo" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">What are machine learning and deep learning?</li>
                                                    <li class="check color-red-dark">Different types of machine learning</li>
                                                    <li class="check color-red-dark">Examples of machine learning</li>
                                                    <li class="check color-red-dark">What is driving the rise of AI?</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaThree" aria-expanded="false">
                                                Technologies driving the rise of AI
                                            </a>
                                        </div>
                                        <div id="ajandaThree" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">What is driving the rise of AI</li>
                                                    <li class="check color-red-dark">Structured Vs Unstructured Data</li>
                                                    <li class="check color-red-dark">Cloud</li>
                                                    <li class="check color-red-dark">IoT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaFour" aria-expanded="false">
                                                Industry 4.0
                                            </a>
                                        </div>
                                        <div id="ajandaFour" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">IoT and Industry</li>
                                                    <li class="check color-red-dark">Smart factory</li>
                                                    <li class="check color-red-dark">Predictive maintenance</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaFive" aria-expanded="false">
                                                Robotics Process Automation
                                            </a>
                                        </div>
                                        <div id="ajandaFive" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">What is RPA</li>
                                                    <li class="check color-red-dark">Is RPA really AI</li>
                                                    <li class="check color-red-dark">Intelligent Automation</li>
                                                    <li class="check color-red-dark">Task Vs Workflow Automation</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaSix" aria-expanded="false">
                                                Case Studies
                                            </a>
                                        </div>
                                        <div id="ajandaSix" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">Fraud Detection</li>
                                                    <li class="check color-red-dark">Improving the Forecasting Process</li>
                                                    <li class="check color-red-dark">Face Detection and Social Distancing Management</li>
                                                    <li class="check color-red-dark">Intelligent Automation</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#ajandaSeven" aria-expanded="false">
                                                Auto ML
                                            </a>
                                        </div>
                                        <div id="ajandaSeven" class="collapse" data-parent="#accordianOne">
                                            <div class="card-body">
                                                <ul class="list-tick-mark">
                                                    <li class="check color-red-dark">What is Auto ML (No code machine learning)</li>
                                                    <li class="check color-red-dark">How to predict churn using AutoML</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="pt-4 pb-2">
                        In general terms, digital transformation can be thought of as integration of digital technology into all areas of a business resulting in fundamental changes to how businesses operate and how they deliver value to their stakeholders (employees, vendors, customers, etc.) to help the organizations compete effectively in an increasingly digital world.
                    </p>

                    <p class="pb-2">
                        In many ways, digital transformation is a misnomer, because digital is not all about technology. Digital transformation is about solving a business problem or developing a new approach where the technology is an enabler and never the driver. It is about how a technology can help a company rethink the way in which it conducts business and change the stakeholders' (customers, vendors, employees) experience, and it’s about adaptation. This sometimes means walking away from longstanding business processes that companies were built upon in favour of relatively new practices that are still being defined. Think Uber, Lyft, Netflix, Airbnb.
                    </p>
                    <p class="pb-2">
                        Another key point to note with digital transformation is that it is not a one and done exercise; rather, it is a mindset, a paradigm shift that allows the organizations to continually improve and ultimately develop a level of digital maturity in order to keep up with the rapidly evolving technological advances in the Market.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->


<!--====== Start Workshop Topic Section ======-->
<section class="skill-area skill-style-two pb-35">
    <div class="container">
        <div class="row">
            <h4 class="text-uppercase pb-25"> Who this Course is for? </h4>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">Executives, CXOs, Managers, Technologists and Students</li>
                        <li class="check color-red-dark">Anyone interested in understanding and applying these technologies for business use</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->


<!--====== Start Skills You Learn Section ======-->
<section class="skill-area skill-style-two pb-35">
    <div class="container">
        <div class="row">
            <h4 class="text-uppercase pb-25"> Top skills you will learn </h4>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">You will get conceptual clarity on AI and its applications including pattern recognition.</li>
                        <li class="check color-red-dark">You will understand the technology behind AI through various concepts and case studies.</li>
                        <li class="check color-red-dark">You will gain insights on technologies stacking up against AI.</li>
                        <li class="check color-red-dark">You will gain a foothold on machine learning and deep learning, different types of machine learning with examples of machine learning.</li>
                        <li class="check color-red-dark">You will get clarity on Industry 4.0, Smart factory & Predictive maintenance.</li>
                        <li class="check color-red-dark">You will understand the several applications of Artificial Intelligence for Business Leaders (CxOs, Managers, Team Leaders, MBA Students, Entrepreneurs).</li>
                        <li class="check color-red-dark">You will gain insights on disruption happening in several domains and industries because of Artificial Intelligence and Machine learning.</li>
                        <li class="check color-red-dark">You can apply Artificial Intelligence and Machine Learning in your areas of functions post this course.</li>
                        <li class="check color-red-dark">You will understand Robotic Process Automation(RPA), RPA Applications, Chatbot & you will have a demo on a RPA Solution.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skills You Learn Section ======-->

<!--====== Start Minimum Requirement Section ======-->
<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h4 class="text-uppercase pb-25"> Minimum Eligibility To Join </h4>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">GRADUATE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Minimum Requirement Section ======-->

<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-45"> Course Curriculum </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center btn-purple text-white">Week</th>
                        <th class="text-center btn-purple text-white">Content</th>
                        <!-- <th class="text-center btn-purple text-white">Related CLO</th>
                        <th class="text-center btn-purple text-white">Scheduled Assessment(s)</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="font-weight-bolder text-nowrap">Week 1</td>
                        <td>
                            <p class="text-danger font-weight-bolder">Unit 1: AI, Data Science and Machine Learning Concepts.</p>
                            What is AI, History of AI, Predictive Vs Descriptive Vs Prescriptive Analytics, Weak AI Vs Strong AI, Classification Vs Regression, Case Studies
                        </td>
                        <!-- <td></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td class="font-weight-bolder text-nowrap">Week 2</td>
                        <td>
                            <p class="text-danger font-weight-bolder">Unit 2: Business Intelligence Implementing 3 Types Of Analytics.</p>
                            Descriptive, Diagnostic, Prescriptive.                       
                        </td>
                        <!-- <td></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td class="font-weight-bolder text-nowrap">Week 3</td>
                        <td>
                            <p class="text-danger font-weight-bolder">Unit 3: Math behind ML.</p>
                            Dependent Vs Independent Variables, Accuracy in classification & regression, Hypothesis Testing, Type 1 & 2 Errors.                                               
                        </td>
                        <!-- <td></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td class="font-weight-bolder text-nowrap">Week 4</td>
                        <td>
                            <p class="text-danger font-weight-bolder">Unit 4: Augmented Analytics & Auto ML.</p>
                            Simple Linear regression, Multiple Linear regression, Logistic regression, Decision tree, kNN.                                               
                        </td>
                        <!-- <td></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center">
                            The units 2 to 4 are hands on sessions. All students will be expected to implement the programming code during the lecture itself. 
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->

<!--====== Start Features Section ======-->
<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> Features </h3>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">Instructor Led</li>
                        <li class="check color-red-dark">Hands on Experience</li>
                        <li class="check color-red-dark">Case Studies</li>
                        <li class="check color-red-dark">On Demand Video</li>
                        <li class="check color-red-dark">Physical and Digital Course Material</li>
                        <li class="check color-red-dark">Assignments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->

<!--====== Start Fancy Block Section ======-->
<section class="fancy-text-block fancy-text-block-twelve light-gray-bg pt-60 pb-80">
    <div class="container">
        
        <h3 class="side-heading red-dark text-uppercase pb-25"> Our Grading System </h3>
        <div class="fancy-block-wrapper">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-5">
                    <div class="img-holder">
                        <img src="{{ url('assets/images/features/img-11.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-wrapper">
                        <div class="section-title mb-25">
                            <h3 class="sub-title sub-title-bg btn-purple">Grading Scale</h3>
                        </div>
                        <div class="faq-accordian">
                            <div class="accordion" id="gradeAccordian">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                                            90 to 100 % - A
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#gradeAccordian">
                                        <div class="card-body">
                                            <p>Demonstrates a high Level of performance and outstanding mastery of the domain area.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                            80 to 89 % - B
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#gradeAccordian">
                                        <div class="card-body">
                                            <p>Demonstrates excellent mastery of subject matter and overall commendable performance and achievement.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                                            70 to 79 % - C
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#gradeAccordian">
                                        <div class="card-body">
                                            <p>Very good mastery of subject matter and excellent knowledge and understanding.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false">
                                           >70 % - F
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#gradeAccordian">
                                        <div class="card-body">
                                            <p>Average performance and achievement. Not sufficient for working independently.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="collapsed no-underline" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false">
                                            Incomplete - I
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#gradeAccordian">
                                        <div class="card-body">
                                            <p>Not completed the required number of assessments.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Fancy Block Section ======-->

<!--====== Start Team Details Section ======-->
<section class="team-details-section">
    <div class="container">
        <h3 class="side-heading red-dark text-uppercase pb-45 pt-25"> Instructor Profile </h3>
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="team-content mb-50">
                    <div class="member-info">
                        <h3 class="side-heading red-dark">Govind Kumar</h3>
                        <p class="position">B. Tech., MBA</p>
                        <p> 23 years of experience in MNCs and startups. Authored 5 books. Three books are related to AI and ML – Comprehensive Machine Learning, Python Programming, De-Mystifying Math & Stats for Machine Learning. Research interests in Fraud Risk Analytics and Customer AI.</p>
                    </div>
                    <div class="member-img text-center mb-10">
                        <img src="{{ url('assets/images/instructor/instructor-1.jpg') }}" class="rounded-circle" alt="Instructor Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                <div class="counter-style-three mb-50 mt-4">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-document"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">23</span>+</h2>
                            <p>Experience (Years)</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">5</span></h2>
                            <p>Authored books</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-dashboard-1"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">99,848</span>+</h2>
                            <p>Students Trained</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="team-content mb-50">
                    <div class="member-info">
                        <h3 class="side-heading red-dark">Kiran Raj</h3>
                        <p class="position">BE, M. Tech</p>
                        <p> Data science and machine learning professional with signal processing background having 8 years of research experience in Artificial Intelligence and Machine Learning. 4 research publications. Research interests in Healthcare AI and Biomedical Signal Processing.</p>
                    </div>
                    <div class="member-img text-center mb-10">
                        <img src="{{ url('assets/images/instructor/instructor-2.jpg') }}" class="rounded-circle" alt="Instructor Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                <div class="counter-style-three mb-50 mt-4">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-document"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">8</span>+</h2>
                            <p>Experience (Years)</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">4</span></h2>
                            <p>Research Publications</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-dashboard-1"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">25</span>+</h2>
                            <p>Courses Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Team Details Section ======-->
<!--====== Start Skill Section ======-->
<section class="skill-area skill-style-two pt-65 pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-45"> Assessment Methods Description </h3>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="skill-item mb-40">
                            <div class="skill-bar mb-20">
                                <div class="circle" data-donutty data-thickness='10' data-padding='0'  data-value='20' data-bg="rgba(67, 186, 255, 0.1)" data-round=false data-color="#43baff"></div>
                                <h2 class="number"><span class="count">20</span>%</h2>
                            </div>
                            <div class="text">
                                <h3 class="title">Quizzes in classes</h3>
                                <p>These will be spot quizzes, mostly unscheduled/surprise tests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="skill-item mb-40">
                            <div class="skill-bar mb-20">
                                <div class="circle" data-donutty data-thickness='10' data-padding='0'  data-value='20' data-bg="rgba(113, 65, 177, 0.1)" data-round=false data-color="#7141b1"></div>
                                <h2 class="number"><span class="count">20</span>%</h2>
                            </div>
                            <div class="text">
                                <h3 class="title">Assignments</h3>
                                <p>Assignments will be given every week.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="skill-item mb-40">
                            <div class="skill-bar mb-20">
                                <div class="circle" data-donutty data-thickness='10' data-padding='0'  data-value='30' data-bg="rgba(253, 74, 24, 0.1)" data-round=false data-color="#fd4a18"></div>
                                <h2 class="number"><span class="count">30</span>%</h2>
                            </div>
                            <div class="text">
                                <h3 class="title">Weekly tests</h3>
                                <p>There will be a test at the beginning of every week.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="skill-item mb-40">
                            <div class="skill-bar mb-20">
                                <div class="circle" data-donutty data-thickness='10' data-padding='0'  data-value='30' data-bg="rgba(170, 56, 24, 0.1)" data-round=false data-color="#18fd1c"></div>
                                <h2 class="number"><span class="count">30</span>%</h2>
                            </div>
                            <div class="text">
                                <h3 class="title">Final exam</h3>
                                <p>Final comprehensive exam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->

<!--====== Start Workshop Topic Section ======-->
<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> Steps to Apply Price </h3>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">Click <b>Enroll Now</b> Button</li>
                        <li class="check color-red-dark">Fill Basic Information</li>
                        <li class="check color-red-dark">Proceed to Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->

<!--====== Start Pricing Section ======-->
<section class="pricing-area pricing-style-one bg_cover pricing-area-bg pt-110 pb-90" id="pricing-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-white text-center mb-65">
                    <span class="sub-title sub-title-bg blue-light-bg">Our Pricing</span>
                    <h2>AI & ML For Business Leaders</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="pricing-item mb-40">
                    <div class="pricing-title-price">
                        <div class="pricing-title">
                            <h3 class="title">Enroll Now</h3>
                            <span class="discount">Payless, Learn More</span>
                        </div>
                        <div class="pricing-price">
                            <h3 class="price"> <span>@</span>1,100 <span class="currency">AED</span></h3>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <p>Future-proof your career with in-demand AI & ML skills. Start your mind-blowing journey today with us.</p>
                        <ul class="list-tick-mark">
                            <li class="check color-red-dark">Machine Learning & AI Concepts</li>
                            <li class="check color-red-dark">Math Behind Building The AI Solutions</li>
                            <li class="check color-red-dark">Regression & Data Visualization</li>
                            <li class="check color-red-dark">Classification Algorithms</li>
                            <li class="check color-red-dark">Exploratory Data Analysis</li>
                        </ul>
                        <h2 class="text-center mb-25 mt-25 red-dark border-top border-bottom pt-1"><span class="text-sm">@</span>1,100 <span class="text-sm">AED</span></h2>
                        <a href="javascript:void(0);" class="main-btn enroll-btn" data-course="ai-ml-business-leader">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Pricing Section ======-->

<!--====== Start Newsletter Section ======
<section class="newsletter-area newsletter-style-one light-gray-bg">
    <div class="container">
        <div class="newsletter-wrapper bg_cover" style="background-image: url(assets/images/bg/newsletter-bg-2.jpg);">
            <div class="row">
                <div class="col-lg-5">
                    <div class="newsletter-content-box">
                        <div class="icon">
                            <i class="flaticon-email-1"></i>
                        </div>
                        <div class="content">
                            <h2>Get Special
                                Rewards</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Enter Address" name="email" required>
                                <i class="far fa-map-marker-alt"></i>
                                <button class="main-btn btn-purple">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
====== End Newsletter Section ======-->
@endsection