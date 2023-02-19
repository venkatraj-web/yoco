@extends("layouts.main_master")
@section('content')
    

<!-- HERO SECTION -->
<section class="section-hero">
    <div class="hero-text-box">
        <h1 class="primary-heading">
            AI-Powered Video Surveillance & Analytics
        </h1>
        <p class="hero-description">
            Tired of post-moments of physical Security,Safety and Operations?
            <br />
            Let's inject intelligence and change the course!
        </p>
        <a href="#" class="btn btn--primary margin-right-sm">Retail</a>
        <a href="#" class="btn btn--secondary">Enterprise</a>
    </div>
    <div class="hero-video-box">
        <video
            src="assets/hero-video.mp4"
            class="hero-video"
            autoplay
            loop
            muted
            preload="auto"
        ></video>
    </div>
</section>

<!-- CAPABILITIES SECTION -->
<section class="capabilities-section">
    <div class="container">
        <header class="capabilities-header">
            <h2 class="small-heading margin-bottom-sm">What We Offer</h2>
            <h3 class="secondary-heading">Our Capabilities</h3>
        </header>
        <main class="capabilities-main grid grid--cols-3">
            <article class="capabilities-card">
                <figure>
                    <img
                        class="capabilities-img"
                        src="assets/camera.svg"
                        alt="Camera Image"
                    />
                </figure>
                <h4 class="capabilities-title">Connect Any Camera</h4>
                <summary class="capabilities-summary">
                    Our Application can integrate all types of cameras for video
                    surveillance. Connect existing camera networks and upgrade to
                    our advanced system.
                </summary>
            </article>
            <article class="capabilities-card">
                <figure>
                    <img
                        class="capabilities-img"
                        src="assets/rapid-review.svg"
                        alt="Target Image"
                    />
                </figure>
                <h4 class="capabilities-title">Rapid Review</h4>
                <summary class="capabilities-summary">
                    Maximize security with our cutting-edge solution for swift
                    review and anomaly detection. Stay ahead of potential threats
                    with fast playback.
                </summary>
            </article>
            <article class="capabilities-card">
                <figure>
                    <img
                        class="capabilities-img"
                        src="assets/AI-tools.svg"
                        alt="AI tools Image"
                    />
                </figure>
                <h4 class="capabilities-title">Use of AI Tools</h4>
                <summary class="capabilities-summary">
                    Our applications utilize the latest AI tools to identify
                    disruptive factors such as facial recognition and object
                    detection, allowing for efficient event monitoring.
                </summary>
            </article>
            <article class="capabilities-card">
                <figure>
                    <img
                        class="capabilities-img"
                        src="assets/motion-intelligence.svg"
                        alt="Motion Intelligence Image"
                    />
                </figure>
                <h4 class="capabilities-title">Motion Intelligence</h4>
                <summary class="capabilities-summary">
                    Our application detects potential threats in crowded locations
                    and sends instant alerts to both the central command center and
                    onsite security guards.
                </summary>
            </article>
            <article class="capabilities-card">
                <figure>
                    <img
                        class="capabilities-img"
                        src="assets/connected-ops.svg"
                        alt="Connected Ops Image"
                    />
                </figure>
                <h4 class="capabilities-title">Secure Operations</h4>
                <summary class="capabilities-summary">
                    Our application detects potential threats in crowded locations
                    and sends instant alerts to both the central command center and
                    onsite security guards.
                </summary>
            </article>
            <article class="capabilities-card">
                <figure>
                    <img
                        class="capabilities-img"
                        src="assets/real-time-update.svg"
                        alt="Real-time Update Image"
                    />
                </figure>
                <h4 class="capabilities-title">Real time upload</h4>
                <summary class="capabilities-summary">
                    Our full perpetual synchronization across all end point networks
                    and central server ensures real-time capture of events, rapid
                    alerts and immediate storage.
                </summary>
            </article>
        </main>
        <footer class="capabilities-footer">
            <a class="btn btn--outlined" href="#">Learn More</a>
        </footer>
    </div>
</section>

<!-- SEGMENTS SECTION  -->
<section class="segments-section">
    <div class="segments container">
        <header class="segments-header">
            <h2 class="small-heading margin-bottom-sm">Area of Focus</h2>
            <h3 class="secondary-heading">Segments</h3>
        </header>
        <main class="segments-main grid grid--cols-3">
            <article class="segments-card">
                <figure class="segments-img-box">
                    <img
                        class="segments-img"
                        src="assets/segments/smart-cities.svg"
                        alt="Smart City Iamge"
                    />
                </figure>
                <div class="segments-text-box">
                    <h4>Smart Cities</h4>
                    <summary class="segments-summary">
                        Goals include improving efficiency, reducing waste, and
                        enhancing public safety, environmental conditions, and quality
                        of life for residents, businesses, and visitors.
                    </summary>
                </div>
            </article>
            <article class="segments-card">
                <figure class="segments-img-box">
                    <img
                        class="segments-img"
                        src="assets/segments/hospitals.svg"
                        alt="Hospital Image"
                    />
                </figure>
                <div class="segments-text-box">
                    <h4>Hospitals</h4>
                    <summary class="segments-summary">
                        Automatically detect and alert security personnel of any
                        suspicious activity, reducing the risk of crime and ensuring
                        the safety of patients, staff and visitors.
                    </summary>
                </div>
            </article>
            <article class="segments-card">
                <figure class="segments-img-box">
                    <img
                        class="segments-img"
                        src="assets/segments/police-department.svg"
                        alt="Police Department"
                    />
                </figure>
                <div class="segments-text-box">
                    <h4>Police Departments</h4>
                    <summary class="segments-summary">
                        Detects suspicious activity and alerts officers to reduce
                        crime and ensure community safety. It also helps identify and
                        track suspects.
                    </summary>
                </div>
            </article>
            <article class="segments-card">
                <figure class="segments-img-box">
                    <img
                        class="segments-img"
                        src="assets/segments/malls.svg"
                        alt="Mall Image"
                    />
                </figure>
                <div class="segments-text-box">
                    <h4>Malls</h4>
                    <summary class="segments-summary">
                        Public places like shopping malls are susceptible to criminal
                        activity. Most feature large open plazas, multiple levels of
                        shops, restaurants, and often movie theaters, along with
                        storage and delivery areas.
                    </summary>
                </div>
            </article>
            <article class="segments-card">
                <figure class="segments-img-box">
                    <img
                        class="segments-img"
                        src="assets/segments/apartments.svg"
                        alt="Apartment Image"
                    />
                </figure>
                <div class="segments-text-box">
                    <h4>Apartments</h4>
                    <summary class="segments-summary">
                        For residential areas like apartments, gated communities,
                        villas and beach houses. It helps monitor visitors and
                        vehicles and gives residents peace of mind & Protects valuable
                        properties.
                    </summary>
                </div>
            </article>
            <article class="segments-card">
                <figure class="segments-img-box">
                    <img
                        class="segments-img"
                        src="assets/segments/manufacturers.svg"
                        alt="Manufacturer Factory Image"
                    />
                </figure>
                <div class="segments-text-box">
                    <h4>Manufacturers</h4>
                    <summary class="segments-summary">
                        Helps manufacturers by monitoring and tracking equipment,
                        employee activity, and inventory. It ensures proper operation,
                        improves productivity and safety, increases efficiency and
                        reduces costs.
                    </summary>
                </div>
            </article>
        </main>
        <footer class="segments-footer">
            <p>Dig deeper into the segments!</p>
            <a class="btn btn--outlined" href="#">Explore More</a>
        </footer>
    </div>
</section>

<!-- CHALLENGES & SOLLUTONS SECTION  -->
<section class="challenges-solutions-section">
    <header class="challenges-solutions-header">
        <img
            class="challenges-solutions-img"
            src="assets/challenges-solutions-banner.png"
            alt="Challenges and innovative solutions banner"
        />
        <h2 class="challenges-solutions-banner-text">
            Challenges and Innovative Solutions
        </h2>
    </header>
    <section class="challenges-section">
        <div class="challenges container">
            <h2 class="challenges-heading">
                Drawbacks of Conventional Surveillance Systems
            </h2>
            <div class="challenges-card-box grid grid--cols-4">
                <!-- <article class="challenges-card">
                    <div class="challenges-title">
                        <img
                            class="challenges-icon"
                            src="assets/challenges&solutions/dollor.svg"
                            alt=""
                        />
                        <h4>High cost of installation and maintenance</h4>
                    </div>
                    <summary class="challenges-summary">
                        Traditional CCTV systems can be costly to install and
                        maintain, as they require specialized equipment and the
                        services of trained professionals.
                    </summary>
                </article> -->
                <article class="challenges-card">
                    <div class="challenges-title">
                        <img
                            class="challenges-icon"
                            src="assets/challenges&solutions/human-monitor.svg"
                            alt=""
                        />
                        <h4>Dependence on human monitoring</h4>
                    </div>
                    <summary class="challenges-summary">
                        Surveillance systems often rely on human monitoring, which can
                        be prone to errors and inefficiencies. This can lead to
                        important footage being missed or overlooked, and can also put
                        a strain on the staff responsible for monitoring the footage.
                    </summary>
                </article>
                <article class="challenges-card">
                    <div class="challenges-title">
                        <img
                            class="challenges-icon"
                            src="assets/challenges&solutions/hotspot.svg"
                            alt=""
                        />
                        <h4>Time-consuming manual analysis</h4>
                    </div>
                    <summary class="challenges-summary">
                        The manual analysis of surveillance footage is limited in its
                        ability to effectively analyze and understand complex
                        behaviors and patterns. This is due to the limitations of
                        human perception and cognition.Hence it can be time-consiming
                        and in effective.
                    </summary>
                </article>
                <article class="challenges-card">
                    <div class="challenges-title">
                        <img
                            class="challenges-icon"
                            src="assets/challenges&solutions/tamper.svg"
                            alt=""
                        />
                        <h4>Inefficient search capabilities</h4>
                    </div>
                    <summary class="challenges-summary">
                        This method requires individuals to manually go through each
                        frame of footage, resulting in a time-consuming process. The
                        inability to effectively search through large amounts of
                        footage makes it difficult to quickly and accurately locate
                        specific events or incidents.
                    </summary>
                </article>
                <article class="challenges-card">
                    <div class="challenges-title">
                        <img
                            class="challenges-icon"
                            src="assets/challenges&solutions/tamper.svg"
                            alt=""
                        />
                        <h4>Challenges in object and individual tracking</h4>
                    </div>
                    <summary class="challenges-summary">
                        The surveillance footage is limited by the difficulty in
                        accurately identifying and tracking individuals and objects
                        automatically and instantly. This method requires individuals
                        to manually review the footage and identify the individuals
                        and objects present in the scene.
                    </summary>
                </article>
            </div>
        </div>
    </section>
    <section class="solutions-section">
        <div class="solutions container grid grid--cols-2">
            <div class="solutions-img-box">
                <img
                    class="solutions-img"
                    src="assets/solutions.png"
                    alt="Innovative AI solution image"
                />
            </div>
            <div class="solutions-text-box">
                <h2 class="solutions-heading">
                    How does AI work in Video Surveillance Systems?
                </h2>
                <summary class="solutions-description">
                    AI video surveillance systems can analyze and interpret footage
                    in real-time, alerting security personnel to potential threats
                    or suspicious activity. They can also learn over time to
                    recognize patterns and improve accuracy. Traditional
                    surveillance systems simply record footage, requiring human
                    monitoring to identify any issues. Additionally, AI video
                    surveillance can integrate with other systems such as access
                    control and license plate recognition, increasing the overall
                    effectiveness of security measures.
                </summary>
                <div class="solutions-card-box grid grid--cols-2">
                    <article class="solutions-card">
                        <div class="solutions-title">
                            <img
                                class="solutions-icon"
                                src="assets/challenges&solutions/real-time.svg"
                                alt=""
                            />
                            <h4>Real-time threat detection and analysis</h4>
                        </div>
                        <summary class="solutions-summary">
                            AI-powered video surveillance systems can analyze footage in
                            real-time and alert security personnel to potential threats
                            or suspicious activity, allowing for quick response.
                        </summary>
                    </article>
                    <article class="solutions-card">
                        <div class="solutions-title">
                            <img
                                class="solutions-icon"
                                src="assets/challenges&solutions/accuracy.svg"
                                alt=""
                            />
                            <h4>Improved accuracy</h4>
                        </div>
                        <summary class="solutions-summary">
                            AI-powered systems can learn over time to recognize patterns
                            and improve accuracy, reducing the number of false alarms.
                        </summary>
                    </article>
                    <article class="solutions-card">
                        <div class="solutions-title">
                            <img
                                class="solutions-icon"
                                src="assets/challenges&solutions/efficiency.svg"
                                alt=""
                            />
                            <h4>Increased efficiency</h4>
                        </div>
                        <summary class="solutions-summary">
                            AI-powered systems can automate many tasks that would
                            typically require human monitoring, such as tracking
                            multiple objects or identifying specific individuals,
                            freeing up security personnel to focus on other tasks.
                        </summary>
                    </article>
                    <article class="solutions-card">
                        <div class="solutions-title">
                            <img
                                class="solutions-icon"
                                src="assets/challenges&solutions/integration.svg"
                                alt=""
                            />
                            <h4>Integration with other systems</h4>
                        </div>
                        <summary class="solutions-summary">
                            AI-powered video surveillance can integrate with other
                            systems such as access control and license plate
                            recognition, increasing the overall effectiveness of
                            security measures.
                        </summary>
                    </article>
                </div>
            </div>
        </div>
        <footer class="solutions-footer">
            <p>Find out more about the approach to meet our clients needs</p>
            <a class="btn btn--outlined" href="#">Explore More</a>
        </footer>
    </section>
</section>
<section class="application-section">
    <div class="application container grid grid--cols-2">
        <div class="application-text-box">
            <ul class="application-list">
                <li class="application-list-item">
                    <img
                        src="assets/tick-without-fill.png"
                        alt="Tick icon without fill"
                    />
                    <p>
                        Real Time
                        <span class="application-colored-text">Alerts</span>
                    </p>
                </li>
                <li class="application-list-item">
                    <img
                        src="assets/tick-without-fill.png"
                        alt="Tick icon without fill"
                    />
                    <p>
                        Advanced
                        <span class="application-colored-text">Analytics</span>
                    </p>
                </li>
                <li class="application-list-item">
                    <img
                        src="assets/tick-without-fill.png"
                        alt="Tick icon without fill"
                    />
                    <p>
                        Effortless Video
                        <span class="application-colored-text"> Filtering </span>
                    </p>
                </li>
            </ul>
            <p class="application-description">
                "Our AI Video Surveillance & Analytics Software offers a real-time
                dashboard, providing you with live streaming of your surveillance
                footage, advanced analytics, and real-time alerts.
            </p>
            <p class="application-description">
                You can be confident in the security of your property. Stay
                informed with real-time notifications via email, SMS, or push
                notifications and respond quickly to any potential security
                incidents. Experience the power of real-time surveillance and
                analytics with our cutting-edge software."
            </p>
        </div>
        <div class="application-img-box">
            <img
                class="application-img"
                src="assets/dashboard.png"
                alt="Third eye application's dashboard"
            />
            <!-- <img
class="application-img-pattern"
src="assets/patterns/round-pattern.svg"
alt="Round pattern"
/> -->
        </div>
    </div>
</section>

<section class="contact-section grid grid--cols-2">
    <div class="contact--1">
        <div class="contact--1-text-box">
            <h3 class="contact--1-text">Need more information?</h3>
            <a
                class="btn btn--brochure margin-right-sm"
                href="assets/docs/brochure.pdf"
                download="brochure.pdf"
                target="_blank"
                rel="noopener noreferrer"
                >Download Brochure</a
            >
            <a
                class="btn btn--play-video"
                href="https://youtu.be/Q2BgPWmYSYs"
                target="_blank"
                rel="noopener noreferrer"
                >Play Video</a
            >
        </div>
        <div class="contact--1-overlay"></div>
    </div>
    <div class="contact--2">
        <p class="contact--2-text">
            Get a personalized demo of the world's most-comprehensive platforms
            and their unique offerings.
        </p>
        <button class="action-btn primary-action-btn" onclick="createModal()">
            Contact us
        </button>
    </div>
</section>



@endsection      