window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("navBar").classList.add('nav-box-shadow');
      document.getElementById("navBar").style.height = "100px";
    } else {
        document.getElementById("navBar").classList.remove('nav-box-shadow');
        document.getElementById("navBar").style.height = "120px";
    }
    if (document.body.scrollTop > 51 || document.documentElement.scrollTop > 51) {
        document.getElementById("navBar").style.height = "100px";
      } else {
          document.getElementById("navBar").style.height = "120px";
      }
  }

document.querySelectorAll('.btn').forEach(item => {
    item.addEventListener('click', () => {
        if (item.value === "item1") {
            document.getElementById('data').innerHTML =
                `<div class="software-dev">
        <h1>Software Development</h1>
        <p class="lead">Full-cycle development of scalable software solutions to drive business
            transformation.
            Leverage our deep technical expertise, functional knowledge and development insights to
            build cutting-edge custom software solutions.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="py-5">
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Custom Software Development</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Software Product Development</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Software Consulting</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Enterprise Mobility</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Software Architecture</a></h5>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="py-5">
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Software Outsourcing</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Digital Transformation</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Project Rescue</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Maintainance and Support</a></h5>
                        </li>
                    </ul>
                    <div class="link ms-auto">
                        <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Build Software <i
                                    class="fa-solid fa-arrow-right-long px-3"></i></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item2") {
            document.getElementById('data').innerHTML =
                `
    <div class="application-dev">
        <h1>Application Development</h1>
        <p class="lead">Next-generation web application development to get greater flexibility, agility and growth.
            Unlock potential of emerging tech with our extensive expertise in Application Modernization,
            Cloud Application and Application Management.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="py-5">
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Custom Application Development</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Application Modernization</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Application Management</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Cloud Application Management</a></h5>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="py-5">
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Application Integration</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Ecommerce Management</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">CMS Website Development</a></h5>
                        </li>
                    </ul>
                    <div class="link ms-auto">
                        <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Create Application <i
                                    class="fa-solid fa-arrow-right-long px-3"></i></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item3") {
            document.getElementById('data').innerHTML = `
    <div class="cloud-app-dev">
        <h1>Cloud Application Development</h1>
        <p class="lead">Robust Cloud application development leveraging AWS, Azure, and Google Cloud. Build, re-
            platform and integrate applications with our developers well versed in cloud-oriented
            security approaches to achieve faster time-to-market.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="py-5">
                        <li class="list-item py-1">
                            <h5 class="text-white">Cloud Assessment Consulting</h5>
                        </li>
                        <li class="list-item py-1">
                            <h5 class="text-white">SaaS Implementations</h5>
                        </li>
                        <li class="list-item py-1">
                            <h5 class="text-white">Cloud Integration Services</h5>
                        </li>
                        <li class="list-item py-1">
                            <h5 class="text-white">Application Migration to Cloud</h5>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="py-5">
                        <li class="list-item py-1">
                            <h5 class="text-white">Cloud Monitoring and Maintenance</h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Amazon Web Services Development</a></h5>
                        </li>
                        <li class="list-item py-1">
                            <h5><a class="text-white" href="">Azure Development</a></h5>
                        </li>
                    </ul>
                    <div class="link ms-auto">
                        <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Migrate to Cloud <i
                                    class="fa-solid fa-arrow-right-long px-3"></i></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item4") {
            document.getElementById('data').innerHTML = `
    <h1> DevOps Services</h1>
    <p class="lead">Full-cycle software solutions to optimize business infrastructures and overall project budget.
        End-to-end development of resilient software solutions at the pace of business with
        inclusive DevOps services for secure software ecosystem.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">DevOps Consulting</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Infrastructure testing and release set-up</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">DevOps Assesment</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">DevOps Automation</h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Environment set-up and implementation</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">DevOps Management</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Maintenance and support</h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Scale with DevOps <em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item5") {
            document.getElementById('data').innerHTML = `
    <h1>Legacy Application Modernization</h1>
    <p class="lead">Transform your legacy applications to more agile and powerful through emerging
        technologies. Inclusive re-engineering services to help you with modernization and
        technology upgradation. Infuse high performance with powerful web applications.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Application Portfolio Assessment</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Application Re-engineering</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Application Cloud Enablement</h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Mainframe Modernization</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Performance Optimization</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Application Migration</h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Modernize Applications <em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item6") {
            document.getElementById('data').innerHTML = `
    <h1>Software Testing</h1>
    <p class="lead">Brilliant Software Testing and QA services for smooth deployment. Extensive automated and
        manual testing processes for accurate information on product quality. Software testing and
        QA services for high-quality project implementation.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">QA Consulting</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Full Cycle QA</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Test Automation</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Custom Testing</h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Performance Testing</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Managed Testing</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">QA Outsourcing</h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Analyse Software <em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item7") {
            document.getElementById('data').innerHTML = `
    <h1>Mobile App Development</h1>
    <p class="lead">Best-in-class Android and Swift developers for mobile application development. Intuitive
        and easy-to-navigate mobile apps development for driving user satisfaction. Build custom
        mobile apps, cross-platform or hybrid apps.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Custom Mobile Application</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">Cross-Platform App Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">Hybrid Apps Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">iOS Development Services </a></h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">Android App Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">Flutter App Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Progressive Web Apps</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Hire Mobile App Developers</h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Build Mobile App <em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item8") {
            document.getElementById('data').innerHTML = `
    <h1>Hire Dedicated Developers</h1>
    <p class="lead">Cross-functional team with proven development capabilities dedicated to your project. Hire
        dedicated remote developers, programmers, and experts on flexible hiring models. We have
        500+ experienced in-house professionals to scale faster.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Software Developers</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">ASP.Net Developers</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Full Stack Developers</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Frontend Developers PHP Developers</h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Node.js Developers</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Angular JS Developers</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">React.js Developers</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white"><a href="" class="text-white">PHP Developers</a></h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Hire Developers <em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item9") {
            document.getElementById('data').innerHTML = `
    <h1>UI/ux Services</h1>
    <p class="lead">UI/ux design services for visually rich applications and excellent user experience online.
        Enable striking designs and innovation-led interfaces with our in-depth two-decade long
        experience in software design, web and mobile apps.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Ul and UX Consulting</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Web Design and Development</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Mobile Design and Development</h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5 class="text-white">Visual Design</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">Interaction Design</h5>
                    </li>
                    <li class="list-item py-1">
                        <h5 class="text-white">UI Testing</h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Create Intuitive Design<em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
        else if (item.value === "item10") {
            document.getElementById('data').innerHTML = `
    <h1>Embedded Software Development</h1>
    <p class="lead">Agile and secure embedded software crafted to dictate specific device functions. World-
        class build quality leveraged to develop intuitive embedded solutions with consistent
        response timings to outperform business functions.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">Embedded Product Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">Embedded Software Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">Embedded Hardware Development</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">Device Driver Development</a></h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="py-5">
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">BSP and OS Porting</a></a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">WHQL Certification</a></h5>
                    </li>
                    <li class="list-item py-1">
                        <h5><a href="" class="text-white">Manufacturing Execution Systems</a></h5>
                    </li>
                </ul>
                <div class="link ms-auto">
                    <h5><a href="#" class="text-decoration-none" style="color: #31bbae;">Develop Firmware<em
                                class="fa-solid fa-arrow-right-long px-3"></em></a></h5>
                </div>
            </div>
        </div>
    </div>
    `;
        }
    })
})