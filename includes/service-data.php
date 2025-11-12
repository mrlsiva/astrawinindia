<?php
// Service Data Structure
$services = [
    'software-solutions' => [
        'id' => 'software-solutions',
        'title' => 'Software Solutions',
        'icon' => './assets/images/service-reboticon.png',
        'hero_image' => './assets/images/aboutpage-image.png',
        'short_description' => 'Astrawin develops intelligent, scalable, and industry-ready software platforms that drive digital transformation, automation, and data intelligence.Our solutions are tailored for enterprises, healthcare institutions, and educational organizations, helping them streamline operations, improve efficiency, and enhance visibility across their ecosystems.',

        'subsections' => [
            [
                'title' => 'Enterprise Solutions',
                'subtitle' => 'Empowering smarter business operations through intelligent automation and digital transformation.',
                'description' => 'Astrawin delivers customized enterprise software systems that simplify complex business processes, integrate departments, and enhance decision-making with real-time insights. Our solutions are designed to scale with your business — enabling agility, efficiency, and measurable performance across all operations.',
                'capabilities' => [
                    'HR & Workforce Solutions' => 'Streamlined employee lifecycle management covering attendance, payroll, leave, and performance tracking with role-based access control.',
                    'ERP & CRM Platforms' => 'Tailor-made business management tools integrating operations, finance, procurement, and customer engagement on a unified platform.',
                    'Web & Mobile Applications' => 'Intuitive, secure, and high-performing apps designed to deliver seamless experiences across devices.',
                    'Cloud & System Integration' => 'Seamless connection between on-premise infrastructure and cloud environments for unified performance and scalability.',
                    'Data Analytics & Reporting' => 'Actionable dashboards and real-time reports for informed decision-making and process optimization.'
                ],
                'outcomes' => [
                    'Streamlined business workflows and improved efficiency',
                    'Enhanced visibility and control across departments',
                    'Increased workforce productivity and customer engagement',
                    'Scalable, secure, and future-ready enterprise systems'
                ]
            ],
            [
                'title' => 'Healthcare Solutions',
                'subtitle' => 'Transforming healthcare management with integrated, data-driven digital platforms.',
                'description' => 'Astrawin\'s healthcare software solutions are built to improve operational efficiency, patient care, and data accessibility for hospitals and multi-branch healthcare organizations. By integrating information systems, automation, and secure access, we help medical institutions achieve seamless workflows and informed clinical decisions.',
                'capabilities' => [
                    'Hospital Information Management System (HIMS)' => 'Centralized management of patient records, staff, billing, pharmacy, laboratories, and multiple hospital branches.',
                    'Electronic Medical Records (EMR)' => 'Cloud-based, secure medical records accessible to authorized staff, ensuring data privacy and compliance.',
                    'Patient & Doctor Portals' => 'Digital engagement platforms for appointment scheduling, secure communication, and teleconsultation.',
                    'Telemedicine & Integration APIs' => 'Enables remote consultations and integration with labs, imaging, and insurance systems.',
                    'Vision-Based QA Automation (VisionPro)' => 'AI-powered visual inspection systems that improve quality, traceability, and operational accuracy in healthcare and manufacturing setups.'
                ],
                'outcomes' => [
                    'Centralized and automated hospital operations',
                    'Enhanced patient and staff experience',
                    'Data-driven decision-making and resource optimization',
                    'Reduced manual errors and improved operational accuracy'
                ]
            ],
            [
                'title' => 'Education Solutions',
                'subtitle' => 'Building smarter, safer, and digitally managed campuses through AI and automation.',
                'description' => 'Astrawin provides an end-to-end technology suite for colleges, universities, and schools, covering every aspect of campus life — from attendance and access control to hostel and network management. Our integrated solutions enable real-time visibility, security, and automation across students, staff, and administration.',
                'capabilities' => [
                    'AI-Based Attendance System' => 'Vision-based camera attendance for students and staff, eliminating proxy entries and ensuring real-time, contactless accuracy.',
                    'Biometric Attendance & Access Control' => 'Fingerprint and face recognition-based identity systems for controlled access to classrooms, labs, and hostels.',
                    'Axis-Based Network Security Solutions' => 'Deployment of Axis network cameras and speakers for surveillance, monitoring, and public announcements, with centralized control for safety and communication.',
                    'Hostel Management System' => 'Room allocation, attendance tracking, visitor management, and maintenance records — all integrated with main campus operations.',
                    'Staff & Student Information System' => 'Centralized database for student and employee details, attendance, and access rights.',
                    'Campus Network & Integration' => 'High-speed, secure LAN/WAN and Wi-Fi connectivity linking all campus zones for seamless operations.',
                    'Digital Administration Tools' => 'Dashboards for real-time tracking, analytics, and management visibility across academic and residential zones.'
                ],
                'outcomes' => [
                    'Unified digital campus management for students and staff',
                    'Accurate, automated attendance and access tracking',
                    'Improved campus safety and communication',
                    'Centralized visibility of academic and hostel operations',
                    'Higher operational efficiency and accountability'
                ]
            ]
        ]
    ],
    'IoT-systems' => [
        'id' => 'IoT-systems',
        'title' => 'IoT Systems',
        'icon' => './assets/images/service-learningicon.png',
        'hero_image' => './assets/images/service-image.png',
        'short_description' => 'Designing intelligent IoT ecosystems that connect devices, capture real-time data, and generate actionable insights through AI-driven analytics — for smarter, more efficient decision-making.',
        'overview' => 'Astrawin\'s IoT and Industrial Automation solutions transform traditional processes into smart, connected, and self-learning ecosystems. We combine hardware integration, edge computing, and intelligent analytics to unlock real-time operational insights.',
        'subsections' => [
            [
                'title' => 'IoT & Industrial Automation',
                'subtitle' => 'Enable intelligent, data-driven manufacturing and infrastructure management.',
                'description' => '',
                'capabilities' => [
                    'Sensor Integration & Edge Computing' => 'Data acquisition from machines, utilities, and environment sensors for live process feedback.',
                    'OEE (Overall Equipment Effectiveness)' => 'Continuous tracking of production availability, performance, and quality.',
                    'Predictive Maintenance' => 'AI algorithms detect performance deviations to prevent unplanned downtime.',
                    'Energy & Utility Optimization' => 'Smart systems to monitor and reduce power, air, and water consumption.',
                    'Centralized Dashboards' => 'Unified view of factory floor data, KPI analytics, and maintenance alerts.'
                ],
                'outcomes' => [
                    'Optimized production and machine uptime',
                    'Lower maintenance and energy costs',
                    'Real-time visibility into process performance',
                    'Improved asset efficiency and sustainability'
                ]
            ],
            [
                'title' => 'Vision-Based Industry Solutions (Vision Pro)',
                'subtitle' => 'Leverage artificial intelligence and computer vision to enhance quality control, traceability, and security in industrial environments.',
                'description' => '',
                'capabilities' => [
                    'AI-Based Quality Assurance (QA-NAVI)' => 'Automated defect detection using Cognex VisionPro Deep Learning, enabling faster inspection, grading, and traceable production quality.',
                    'Facial Recognition Attendance' => 'Contactless identity verification integrated with workforce systems for secure attendance logging.',
                    'Visitor Management System' => 'Intelligent access control and digital visitor authentication for safety compliance.',
                    'Warehouse Vision Solutions' => 'Real-time visual tracking for stock validation and audit readiness.'
                ],
                'outcomes' => [
                    'Consistent and accurate inspection results',
                    'Elimination of human errors in visual QA',
                    'Improved operational security and efficiency',
                    'End-to-end digital traceability in production lines'
                ]
            ]
        ]
    ],
    'cybersecurity-services' => [
        'id' => 'cybersecurity-services',
        'title' => 'Cybersecurity Services',
        'icon' => './assets/images/service-metalicon.png',
        'hero_image' => './assets/images/choose-image.png',
        'short_description' => 'Safeguarding digital assets with advanced threat intelligence, proactive monitoring, and compliance-driven protection strategies to ensure complete cyber resilience.',
        'overview' => 'Astrawin provides end-to-end cybersecurity solutions to protect enterprises from digital threats, ensuring data integrity, business continuity, and compliance readiness. We help organizations strengthen their security posture through proactive defense and intelligent response.',
        'subsections' => [
            [
                'title' => 'Comprehensive Security Solutions',
                'subtitle' => 'Protecting your digital infrastructure with advanced cybersecurity measures.',
                'description' => '',
                'capabilities' => [
                    'Threat & Vulnerability Assessment' => 'Identify potential weak points and mitigate security risks before exploitation.',
                    'Firewall & Network Security' => 'Design and deployment of next-generation firewalls with advanced intrusion prevention.',
                    'Endpoint Protection' => 'Secure management of laptops, desktops, and mobile devices with centralized policy enforcement.',
                    'Access Control & Encryption' => 'Role-based access and encrypted data exchange for critical applications.',
                    'Incident Response & Forensics' => 'Structured containment, investigation, and recovery planning for faster restoration.',
                    'Threat Intelligence & Advisory' => 'Continuous evaluation of global threat trends to enhance local security posture.'
                ],
                'outcomes' => [
                    'Proactive protection against cyber threats',
                    'Secured network and application environments',
                    'Strengthened data privacy and trust',
                    'Reduced exposure to operational disruptions'
                ]
            ]
        ]
    ],
    'managed-it-services' => [
        'id' => 'managed-it-services',
        'title' => 'Managed IT Services',
        'icon' => './assets/images/service-analysicon.png',
        'hero_image' => './assets/images/team-image1.png',
        'short_description' => 'Providing end-to-end IT management — from infrastructure monitoring to helpdesk support — ensuring reliability, continuity, and operational excellence.',
        'overview' => 'Astrawin\'s Managed IT Services are designed to deliver operational reliability, security, and performance consistency. We enable organizations to focus on innovation while we manage and optimize the underlying IT environment.',
        'subsections' => [
            [
                'title' => 'Complete IT Management',
                'subtitle' => 'Comprehensive IT operations and support services.',
                'description' => '',
                'capabilities' => [
                    'IT Operations Management' => 'End-to-end administration of infrastructure, servers, and networks for seamless business operations.',
                    'Remote Infrastructure Management (RIM)' => 'Centralized visibility and proactive maintenance of distributed IT assets.',
                    'Technical Support (L1–L3)' => 'Tiered support framework ensuring timely resolution and escalation management.',
                    'Backup & Business Continuity' => 'Automated backup and recovery systems to ensure operational resilience.',
                    'IT Policy & Governance' => 'Development of IT usage guidelines and operational frameworks for risk control.'
                ],
                'outcomes' => [
                    'Streamlined IT operations and minimal downtime',
                    'Improved system reliability and performance',
                    'Predictable and optimized IT costs',
                    'Enhanced governance and compliance consistency'
                ]
            ]
        ]
    ],
    'infrastructure-management' => [
        'id' => 'infrastructure-management',
        'title' => 'Infrastructure Management',
        'icon' => './assets/images/service-scienceicon.png',
        'hero_image' => './assets/images/banner-image.png',
        'short_description' => 'Building and maintaining robust IT infrastructures that support scalability, security, and seamless business performance across environments.',
        'overview' => 'Astrawin designs and deploys secure, high-performance, and scalable infrastructure ecosystems that power digital transformation. Our focus is on building resilient IT backbones that support growth, connectivity, and operational agility.',
        'subsections' => [
            [
                'title' => 'Infrastructure Design & Implementation',
                'subtitle' => 'Building robust and scalable IT infrastructure.',
                'description' => '',
                'capabilities' => [
                    'Data Center Design & Implementation' => 'Modular and redundant architectures for uninterrupted performance.',
                    'Enterprise Networking' => 'End-to-end LAN/WAN setup, SD-WAN deployment, and high-speed connectivity.',
                    'Structured Cabling & Fiber Networks' => 'Design and implementation of high-density structured cabling and fiber systems.',
                    'Surveillance & Access Systems' => 'Integration of IP-based CCTV, biometric, and RFID systems for workplace security.',
                    'Power & Cooling Solutions' => 'Deployment of UPS, PDUs, and optimized cooling systems for energy-efficient operations.',
                    'Wireless Infrastructure' => 'Enterprise Wi-Fi solutions with centralized management for seamless connectivity.'
                ],
                'outcomes' => [
                    'Stable and scalable network architecture',
                    'Enhanced operational uptime and data security',
                    'Simplified maintenance and future scalability',
                    'Reliable foundation for digital transformation initiatives'
                ]
            ]
        ]
    ],
    'workspace-technologies' => [
        'id' => 'workspace-technologies',
        'title' => 'Next-Generation Workspace Technologies',
        'icon' => './assets/images/counter-image1.png',
        'hero_image' => './assets/images/testimonial-image.png',
        'short_description' => 'Transforming workplaces through cloud, collaboration, and automation tools that drive productivity, mobility, and smarter employee experiences.',
        'overview' => 'Astrawin redefines modern workplaces through smart, collaborative, and connected environments that empower teams to work efficiently and securely. We integrate cloud, IoT, and AV technologies to create seamless digital workspaces.',
        'subsections' => [
            [
                'title' => 'Modern Workplace Solutions',
                'subtitle' => 'Creating smart, collaborative, and connected work environments.',
                'description' => '',
                'capabilities' => [
                    'Cloud Strategy & Migration' => 'Hybrid and multi-cloud migration services with performance optimization.',
                    'Virtual Desktop Infrastructure (VDI)' => 'Secure, centralized computing environments accessible from any device.',
                    'Collaboration Platforms' => 'Deployment and customization of enterprise tools such as Microsoft Teams, Zoom, and Google Workspace.',
                    'Digital Workspace Automation' => 'Smart meeting rooms, scheduling systems, and environment automation through IoT sensors.',
                    'Interactive Displays & Panels' => 'Touch-enabled digital boards for classrooms, training, and conference setups.',
                    'Unified AV Systems' => 'Integration of audio-visual systems, conferencing tools, and wireless presentation solutions.',
                    'Digital Signage Solutions' => 'Dynamic content display for communication, branding, and announcements.',
                    'Smart Environment Controls' => 'IoT-enabled lighting, air-conditioning, and occupancy sensors for sustainable workplaces.',
                    'Conference & Collaboration Rooms' => 'End-to-end AV integration with automation, voice control, and hybrid connectivity.'
                ],
                'outcomes' => [
                    'Enhanced team collaboration and communication',
                    'Flexible and efficient workspace utilization',
                    'Improved digital engagement and meeting experiences',
                    'Technology-enabled, sustainable, and future-ready environments'
                ]
            ]
        ]
    ]
];
?>