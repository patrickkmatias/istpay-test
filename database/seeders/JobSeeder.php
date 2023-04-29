<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Mid-level Software Engineer',
                'description' => "We are seeking a talented Mid-level Software Engineer to join our dynamic and innovative team. The ideal candidate should have a passion for software engineering and a desire to solve complex problems. As a Mid-level Software Engineer, you will be responsible for designing, developing, and maintaining software solutions that meet our clients' needs.

                Key Responsibilities:
                
                Collaborate with cross-functional teams to identify and analyze software requirements
                Design and develop high-quality software solutions using modern programming languages and frameworks
                Write clean, maintainable, and efficient code that adheres to industry best practices
                Perform unit testing and debugging to ensure that software solutions are of the highest quality
                Document software designs and development activities for future reference
                Provide technical support to clients and resolve software-related issues in a timely manner

                Requirements:
                
                Bachelor's or Master's degree in Computer Science or a related field
                At least 3 years of experience in software engineering
                Strong proficiency in at least one modern programming language such as Java, Python, or C++
                Solid understanding of software development principles, methodologies, and practices
                Experience working with databases and SQL
                Excellent problem-solving and analytical skills
                Strong communication and teamwork skills

                If you are a passionate software engineer looking to work in a fast-paced and challenging environment, we encourage you to apply for this exciting opportunity. This is a full-time position with competitive compensation and benefits packages.",
                'type' => 'CLT',
            ],
            [
                'title' => 'Marketing Coordinator',
                'description' => "We are looking for a motivated Marketing Coordinator to join our team on a freelance basis. The Marketing Coordinator will work closely with the Marketing Manager to develop and implement marketing strategies that promote our brand and products to our target audience.

                Key Responsibilities:
                
                Collaborate with the Marketing Manager to create and execute marketing plans and campaigns that align with business objectives
                Develop and manage social media content and engagement across various platforms
                Assist in creating and managing email marketing campaigns, including writing copy and designing templates
                Conduct market research and analysis to identify customer needs, preferences, and trends
                Assist in organizing and executing promotional events, such as product launches and trade shows
                Coordinate with internal teams to ensure that all marketing collateral is accurate and up-to-date
                Monitor and report on the performance of marketing campaigns and activities

                Requirements:
                
                Bachelor's degree in Marketing, Communications, or a related field
                At least 2 years of experience in marketing, preferably in a similar role
                Solid understanding of marketing principles, strategies, and tactics
                Experience with social media management and email marketing platforms
                Strong communication and writing skills
                Excellent organizational and project management skills
                Ability to work independently and within a team environment
                Detail-oriented with a strong focus on accuracy and quality

                This is a freelance position with the potential for ongoing work based on performance. If you are a self-starter with a passion for marketing and a desire to work in a fast-paced and dynamic environment, we encourage you to apply.",
                'type' => 'Freelance', 
            ],
            [
                'title' => 'Digital Marketing Specialist',
                'description' => "We are seeking a highly motivated Digital Marketing Specialist to join our team on a contract basis. As a Digital Marketing Specialist, you will be responsible for developing, implementing, and managing our digital marketing campaigns to drive brand awareness and lead generation.

                Key Responsibilities:
                
                Develop and execute digital marketing campaigns across various channels such as email, social media, search engine marketing, and display advertising
                Monitor and analyze the performance of digital marketing campaigns using web analytics tools such as Google Analytics and adjust strategies as needed
                Create and manage content for social media channels and email marketing campaigns
                Collaborate with cross-functional teams to ensure that campaigns are aligned with brand messaging and business goals
                Research and stay up-to-date on industry trends, best practices, and emerging technologies
                Identify opportunities for growth and improvement in digital marketing strategies

                Requirements:
                
                Bachelor's degree in Marketing, Communications, or a related field
                At least 2 years of experience in digital marketing
                Solid understanding of digital marketing principles and best practices
                Experience managing digital marketing campaigns across various channels such as email, social media, search engine marketing, and display advertising
                Strong analytical skills and proficiency in web analytics tools such as Google Analytics
                Excellent written and verbal communication skills
                Ability to work independently and collaboratively with cross-functional teams

                This is a contract position with a flexible work schedule and the opportunity to work remotely. If you are a results-driven and creative digital marketer looking for an exciting opportunity, we encourage you to apply.",
                'type' => 'Contractor', 
            ],
            [
                'title' => 'Senior Project Manager',
                'description' => "We are seeking an experienced Senior Project Manager to oversee the planning, execution, and delivery of complex projects. As a Senior Project Manager, you will be responsible for ensuring that projects are completed on time, within budget, and to the satisfaction of stakeholders.

                Key Responsibilities:
                
                Define project scope, goals, and deliverables in collaboration with stakeholders
                Develop and maintain detailed project plans, schedules, and budgets
                Identify project risks and develop risk management strategies to minimize their impact
                Monitor project progress and adjust plans as necessary to ensure successful completion
                Manage project resources, including personnel, equipment, and materials
                Ensure that project documentation is accurate and up-to-date
                Communicate project status, progress, and issues to stakeholders and senior management
                Provide leadership and mentorship to project team members

                Requirements:
                
                Bachelor's degree in Business Administration, Engineering, or a related field
                At least 7 years of experience in project management, with a focus on managing complex projects
                Demonstrated success in leading and delivering projects on time and within budget
                Strong project management skills, including risk management, scheduling, and budgeting
                Excellent communication and leadership skills
                Proven ability to work effectively with cross-functional teams and stakeholders
                Experience managing projects in an Agile environment is a plus
                PMP certification is a plus

                This is a contractor position with the potential for long-term engagement based on performance. If you are a results-driven project manager with a passion for delivering complex projects on time and within budget, we encourage you to apply.",
                'type' => 'Contractor', 
            ],
            [
                'title' => 'Human Resources Generalist',
                'description' => "We are seeking a skilled Human Resources Generalist to join our team. As a Human Resources Generalist, you will be responsible for a variety of HR activities, including recruiting, onboarding, benefits administration, and employee relations.

                Key Responsibilities:
                
                Manage the recruitment process, including job postings, screening resumes, scheduling interviews, and conducting reference checks
                Facilitate new hire onboarding and orientation, including paperwork, training, and introductions to team members
                Administer employee benefits programs, including health insurance, 401(k), and other voluntary benefits
                Maintain employee records and ensure that HR systems are accurate and up-to-date
                Provide guidance and support to employees and managers on HR-related issues, including performance management, discipline, and grievances
                Assist with the development and implementation of HR policies and procedures
                Manage HR-related projects, such as performance evaluations and employee engagement surveys
                Ensure compliance with federal, state, and local employment laws and regulations

                Requirements:
                
                Bachelor's degree in Human Resources, Business Administration, or a related field
                At least 3 years of experience in human resources, with a focus on HR generalist activities
                Strong knowledge of employment laws and regulations
                Excellent communication and interpersonal skills
                Strong attention to detail and accuracy
                Ability to work independently and as part of a team
                Proficiency with HRIS systems and Microsoft Office

                This is a full-time position with competitive compensation and benefits packages. If you are a skilled HR professional with a passion for supporting employees and ensuring compliance, we encourage you to apply.",
                'type' => 'CLT', 
            ],
            [
                'title' => 'Customer Service Representative',
                'description' => "We are seeking a friendly and professional Customer Service Representative to join our team. As a Customer Service Representative, you will be responsible for providing exceptional customer service and support to our clients via phone, email, and chat.

                Key Responsibilities:
                
                Respond to customer inquiries and resolve issues in a timely and professional manner
                Manage and update customer accounts and profiles
                Communicate with customers via phone, email, and chat to provide assistance and support
                Identify and escalate complex customer issues to senior support staff as needed
                Maintain detailed and accurate customer records
                Provide feedback to the product and development teams on customer feedback and issues
                Ensure that all customer interactions are handled in compliance with company policies and procedures

                Requirements:
                
                High school diploma or equivalent
                At least 2 years of experience in customer service or a related field
                Excellent communication and interpersonal skills
                Strong problem-solving and analytical skills
                Ability to work independently and within a team environment
                Detail-oriented with a strong focus on accuracy and quality
                Experience with customer service software and tools is a plus
                Familiarity with CRM systems and processes is a plus

                This is a full-time position with competitive compensation and benefits packages. If you are a customer service professional with a passion for providing exceptional service to customers, we encourage you to apply.",
                'type' => 'CLT', 
            ],
            [
                'title' => 'Graphic Designer',
                'description' => "We are seeking a talented Graphic Designer to join our team on a freelance basis. The Graphic Designer will be responsible for creating visual concepts that communicate ideas that inspire, inform, and captivate our audience.

                Key Responsibilities:
                
                Collaborate with the creative team to develop creative solutions that meet project objectives
                Create and design engaging visual content for print and digital media including but not limited to websites, social media, advertising, and marketing materials
                Develop design layouts, graphics, and templates that are visually appealing and functional
                Manage multiple design projects simultaneously and meet project deadlines
                Adapt and modify designs based on feedback from stakeholders
                Stay up-to-date with design trends, software, and techniques

                Requirements:
                
                Bachelor's degree in Graphic Design or a related field
                At least 2 years of experience in graphic design, preferably in an agency or fast-paced environment
                Proficiency in Adobe Creative Suite, including Photoshop, Illustrator, and InDesign
                Knowledge of UX/UI design principles is a plus
                Strong typography, layout, and design skills
                Ability to work independently and within a team environment
                Detail-oriented with a strong focus on accuracy and quality
                Strong written and verbal communication skills

                This is a freelance position with the potential for ongoing work based on performance. If you are a creative and talented Graphic Designer with a passion for design, we encourage you to apply.",
                'type' => 'Freelance', 
            ],
            [
                'title' => 'Digital Content Creator',
                'description' => "We are looking for a talented Digital Content Creator to join our team on a freelance basis. As a Digital Content Creator, you will be responsible for creating engaging and compelling content for our digital platforms, including social media, email campaigns, and website.

                Key Responsibilities:
                
                Create digital content, including social media posts, email campaigns, website copy, and video content
                Develop and execute content strategies that align with business objectives
                Collaborate with the marketing team to ensure that all content is consistent with brand guidelines
                Monitor and analyze content performance metrics and adjust strategies as needed
                Stay up-to-date with the latest digital trends and technologies to ensure that our content remains fresh and engaging
                Assist with content curation and sourcing as needed
                Manage and maintain our content calendar

                Requirements:
                
                Bachelor's degree in Marketing, Communications, or a related field
                At least 3 years of experience in digital content creation, preferably in a similar role
                Strong writing and editing skills with a keen eye for detail
                Experience creating content for social media platforms, including Instagram, Facebook, and Twitter
                Experience with email marketing platforms and website content management systems
                Basic knowledge of graphic design principles and software is a plus
                Excellent organizational and project management skills
                Ability to work independently and within a team environment
                Familiarity with SEO best practices is a plus

                This is a freelance position with the potential for ongoing work based on performance. If you are a creative and motivated digital content creator with a passion for developing engaging content, we encourage you to apply.",
                'type' => 'Freelance', 
            ],
            [
                'title' => 'Full-Stack Developer',
                'description' => "We are seeking a skilled Full-Stack Developer to join our development team. As a Full-Stack Developer, you will be responsible for designing and implementing software solutions that meet the needs of our clients and end-users.

                Key Responsibilities:
                
                Develop and maintain web applications using modern technologies and frameworks
                Collaborate with cross-functional teams to design and implement software solutions
                Write clean, efficient, and well-documented code
                Troubleshoot and debug applications as needed
                Participate in code reviews and contribute to the development of best practices and standards
                Keep up-to-date with emerging trends and technologies in web development
                Work in an Agile development environment and participate in Agile ceremonies as needed

                Requirements:
                
                Bachelor's degree in Computer Science or a related field
                At least 5 years of experience in full-stack web development
                Proficiency in JavaScript, HTML, CSS, and one or more modern web frameworks (React, Angular, Vue.js)
                Strong knowledge of server-side programming languages (Java, Python, Node.js, Ruby)
                Experience with relational databases (MySQL, PostgreSQL) and NoSQL databases (MongoDB, Redis)
                Familiarity with cloud computing platforms (AWS, Azure, GCP)
                Excellent problem-solving and analytical skills
                Strong communication and collaboration skills

                This is a contractor position with the potential for long-term engagement based on performance. If you are a skilled Full-Stack Developer with a passion for building robust and scalable web applications, we encourage you to apply.",
                'type' => 'Contractor', 
            ],
            [
                'title' => 'DevOps Engineer',
                'description' => "We are looking for a talented DevOps Engineer to join our team. As a DevOps Engineer, you will be responsible for designing, implementing, and maintaining the infrastructure and systems that support our software development and deployment processes.

                Key Responsibilities:
                
                Design and implement automation solutions for the deployment, testing, and monitoring of software applications and systems
                Manage and configure infrastructure resources, including servers, storage, and network devices
                Collaborate with software development teams to ensure that code is built, tested, and deployed efficiently and reliably
                Develop and maintain tools and scripts to automate routine tasks and processes
                Implement and maintain security and access controls for all systems and infrastructure resources
                Monitor system performance and troubleshoot issues as they arise
                Continuously evaluate and improve infrastructure and systems to ensure scalability, reliability, and efficiency
                
                Requirements:
                
                Bachelor's degree in Computer Science, Software Engineering, or a related field
                At least 3 years of experience in DevOps, Systems Administration, or a related field
                Strong understanding of software development processes and methodologies
                Experience with automation tools and frameworks, such as Ansible, Terraform, and Jenkins
                Familiarity with cloud computing platforms, such as AWS or Azure
                Strong scripting skills, with proficiency in Python or Ruby
                Experience with containerization technologies, such as Docker and Kubernetes
                Strong understanding of network and infrastructure security concepts and best practices

                This is a full-time position with competitive compensation and benefits packages. If you are a DevOps professional with a passion for building and maintaining robust and scalable software infrastructure, we encourage you to apply.",
                'type' => 'CLT', 
            ],
            [
                'title' => 'Front-End Developer',
                'description' => "We are looking for a skilled and experienced Front-End Developer to join our development team. The Front-End Developer will be responsible for developing and maintaining web applications that meet the needs of our clients and users.

                Key Responsibilities:
                
                Collaborate with designers, developers, and other stakeholders to create high-quality, user-friendly web applications
                Develop responsive, cross-browser compatible, and accessible front-end components using HTML, CSS, and JavaScript
                Optimize web applications for performance, speed, and scalability
                Identify and troubleshoot front-end issues and bugs
                Write clean, well-documented, and maintainable code
                Stay up-to-date with the latest front-end development trends, techniques, and tools
                Participate in code reviews and contribute to the improvement of the development process

                Requirements:
                
                Bachelor's degree in Computer Science, Software Engineering, or a related field
                At least 3 years of experience in front-end development
                Strong proficiency in HTML, CSS, and JavaScript
                Experience with front-end frameworks such as React, Vue, or Angular
                Familiarity with version control systems, particularly Git
                Understanding of software development principles and methodologies, including Agile
                Excellent problem-solving and analytical skills
                Strong communication and collaboration skills
                Ability to work independently and within a team environment
                Detail-oriented with a strong focus on quality

                This is a full-time position with competitive compensation and benefits packages. If you are a front-end developer with a passion for building high-quality web applications, we encourage you to apply.",
                'type' => 'CLT',
            ],
            [
                'title' => 'Front-end Developer',
                'description' => "We are seeking a talented Front-end Developer to join our team on a freelance basis. As a Front-end Developer, you will be responsible for developing and implementing user-facing features that enhance the user experience of our web applications.

                Key Responsibilities:
                
                Collaborate with designers and back-end developers to create user-friendly interfaces for web applications
                Develop and implement responsive and cross-browser compatible user interfaces
                Write clean, efficient, and maintainable code using HTML, CSS, and JavaScript
                Optimize web application performance and scalability
                Stay up-to-date with emerging trends and technologies in front-end development
                Participate in code reviews and contribute to the development of best practices and standards
                Work closely with the QA team to ensure that all code changes are thoroughly tested and meet the specified requirements

                Requirements:
                
                Bachelor's degree in Computer Science, Information Technology, or a related field
                At least 3 years of experience in front-end development
                Strong understanding of HTML, CSS, and JavaScript
                Experience with popular front-end frameworks and libraries such as React, Angular, or Vue.js
                Knowledge of responsive design and cross-browser compatibility
                Ability to write efficient and maintainable code
                Familiarity with Agile methodologies and tools
                Excellent problem-solving and debugging skills
                Strong communication and collaboration skills
                Experience with Git and version control is a plus

                This is a freelance position with the potential for ongoing work based on performance. If you are a self-motivated front-end developer with a passion for creating user-friendly interfaces for web applications, we encourage you to apply.",
                'type' => 'Freelance',
            ],
            [
                'title' => 'Software Quality Assurance Engineer',
                'description' => "We are seeking a skilled Software Quality Assurance Engineer to join our software development team. As a Software Quality Assurance Engineer, you will be responsible for ensuring the quality of our software products by developing and executing test plans, identifying defects, and working with development teams to resolve issues.

                Key Responsibilities:
                
                Develop and execute test plans and test cases to ensure the quality of software products
                Collaborate with development teams to identify and resolve software defects
                Identify and report software quality issues and work with development teams to resolve them
                Create and maintain automated testing scripts to improve testing efficiency
                Document and track software defects using issue tracking software
                Participate in the software development lifecycle to ensure that software quality is maintained throughout the process
                Work with cross-functional teams to ensure that software products meet business requirements

                Requirements:
                
                Bachelor's degree in Computer Science, Software Engineering, or a related field
                At least 3 years of experience in software quality assurance, with experience in testing web applications and APIs
                Solid understanding of software testing methodologies and techniques
                Experience with automated testing tools and frameworks
                Familiarity with Agile software development methodologies
                Strong problem-solving and analytical skills
                Excellent communication and interpersonal skills
                Detail-oriented with a strong focus on accuracy and quality

                This is a full-time position with competitive compensation and benefits packages. If you are a software quality assurance professional with a passion for ensuring the quality of software products, we encourage you to apply.",
                'type' => 'CLT',
            ],
            [
                'title' => 'HR Generalist',
                'description' => "We are seeking an experienced HR Generalist to join our team. As an HR Generalist, you will be responsible for providing a broad range of HR support to our employees and managers, including recruitment, onboarding, performance management, employee relations, and compliance.

                Key Responsibilities:
                
                Assist with recruitment efforts, including sourcing, screening, and interviewing candidates
                Facilitate the onboarding process for new hires, including orientation, training, and documentation
                Provide guidance and support to managers and employees on performance management, including goal setting, performance feedback, and disciplinary actions
                Serve as a point of contact for employee relations issues, providing support and guidance to employees and managers
                Manage and maintain HR policies and procedures, ensuring compliance with federal and state regulations
                Manage employee benefits programs, including enrollment, administration, and communication
                Support HR reporting and analysis, including employee headcount, turnover, and other HR metrics
                Contribute to HR projects and initiatives as assigned
                
                Requirements:
                
                Bachelor's degree in Human Resources, Business Administration, or a related field
                At least 5 years of experience in HR, with a focus on HR Generalist duties
                Strong knowledge of HR principles, practices, and regulations
                Demonstrated success in recruiting and hiring top talent
                Excellent communication and interpersonal skills
                Strong problem-solving and analytical skills
                Ability to work independently and within a team environment
                Detail-oriented with a strong focus on accuracy and quality
                PHR or SPHR certification is a plus

                This is a full-time position with competitive compensation and benefits packages. If you are an experienced HR professional with a passion for supporting employees and managers and driving HR initiatives, we encourage you to apply.
                ",
                'type' => 'CLT',
            ],
            [
                'title' => 'Talent Acquisition Specialist',
                'description' => "We are looking for a motivated Talent Acquisition Specialist to join our HR team. The Talent Acquisition Specialist will be responsible for sourcing, recruiting, and hiring top talent for various positions within the organization.

                Key Responsibilities:
                
                Develop and implement sourcing strategies to attract a diverse pool of candidates for open positions
                Utilize various recruiting channels, such as job boards, social media, and employee referrals, to source candidates
                Review resumes and applications, and conduct phone screens and interviews to assess candidate qualifications
                Collaborate with hiring managers to develop job descriptions and interview criteria
                Facilitate the interview process, including scheduling interviews and conducting reference checks
                Ensure compliance with all hiring laws, regulations, and policies
                Maintain accurate and up-to-date candidate and job-related information in the Applicant Tracking System (ATS)
                Attend job fairs and other recruiting events to promote the company and job openings

                Requirements:
                
                Bachelor's degree in Human Resources, Business Administration, or a related field
                At least 3 years of experience in talent acquisition or a related field
                Solid understanding of recruitment processes, strategies, and best practices
                Experience with applicant tracking systems and recruiting software
                Excellent communication and interpersonal skills
                Strong organizational and project management skills
                Ability to work independently and within a team environment
                Detail-oriented with a strong focus on accuracy and quality
                Familiarity with social media and other sourcing channels is a plus

                This is a full-time position with competitive compensation and benefits packages. If you are a skilled recruiter with a passion for finding top talent, we encourage you to apply.",
                'type' => 'CLT',
            ],
            [
                'title' => 'Digital Marketing Specialist',
                'description' => "We are looking for an experienced Digital Marketing Specialist to develop and implement marketing strategies that drive traffic, engagement, and leads to our website. As a Digital Marketing Specialist, you will be responsible for developing and executing digital marketing campaigns across various channels, including SEO, SEM, social media, email, and display advertising.

                Key Responsibilities:
                
                Develop and execute digital marketing campaigns to drive traffic, engagement, and leads to our website
                Conduct keyword research and analysis to optimize website content and drive organic traffic
                Manage and optimize paid search and display advertising campaigns
                Manage and optimize social media campaigns across various platforms
                Develop and manage email marketing campaigns, including writing copy and designing templates
                Monitor and report on the performance of digital marketing campaigns and activities
                Collaborate with internal teams to ensure that all digital marketing activities are aligned with business objectives
                Stay up-to-date with digital marketing trends and best practices

                Requirements:
                
                Bachelor's degree in Marketing, Communications, or a related field
                At least 4 years of experience in digital marketing, with a focus on SEO, SEM, social media, email marketing, and display advertising
                Solid understanding of digital marketing principles, strategies, and tactics
                Experience with digital marketing tools and platforms, such as Google Analytics, AdWords, and social media management tools
                Strong analytical skills and the ability to use data to drive decision-making
                Excellent communication and writing skills
                Detail-oriented with a strong focus on accuracy and quality
                Ability to work independently and within a team environment
                Agency experience is a plus

                This is a contractor position with the potential for ongoing work based on performance. If you are a results-driven digital marketing specialist with a passion for driving traffic and leads to websites, we encourage you to apply.",
                'type' => 'Contractor',
            ],
            [
                'title' => 'Sales Associate',
                'description' => "We are looking for a dynamic and results-driven Sales Associate to join our team. As a Sales Associate, you will be responsible for building and maintaining relationships with customers, identifying their needs, and recommending products and services that best meet their needs.

                Key Responsibilities:
                
                Build and maintain relationships with customers to ensure repeat business and referrals
                Identify customer needs and recommend products and services that best meet their needs
                Meet or exceed sales goals and quotas
                Maintain a high level of product knowledge and stay up-to-date with industry trends
                Process orders and provide accurate product information and pricing
                Resolve customer issues and complaints in a timely and professional manner
                Collaborate with internal teams to ensure customer satisfaction and sales success

                Requirements:
                
                High school diploma or equivalent
                At least 1 year of experience in sales or a related field
                Strong communication and interpersonal skills
                Proven ability to meet or exceed sales goals and quotas
                Strong customer service skills and the ability to resolve customer issues in a timely and professional manner
                Excellent organizational skills and attention to detail
                Ability to work independently and within a team environment
                Familiarity with CRM systems and processes is a plus
                Sales experience in the [industry] industry is a plus

                This is a full-time position with competitive compensation and benefits packages. If you are a results-driven sales professional with a passion for building relationships with customers, we encourage you to apply.",
                'type' => 'CLT',
            ],
            [
                'title' => 'Human Resources Manager',
                'description' => "We are seeking an experienced Human Resources Manager to join our team. As the HR Manager, you will be responsible for developing and executing HR strategies that support our business objectives, as well as managing all HR-related activities, including recruitment, training and development, performance management, employee relations, and compliance.

                Key Responsibilities:
                
                Develop and implement HR strategies that support business objectives and drive employee engagement and satisfaction
                Manage the recruitment and selection process, including job postings, candidate screening, interviews, and job offers
                Develop and deliver training and development programs to enhance employee skills and knowledge
                Manage employee performance, including performance evaluations, goal setting, and coaching
                Ensure compliance with HR policies, procedures, and regulations
                Manage employee relations, including conflict resolution, mediation, and disciplinary actions
                Maintain accurate HR records and prepare reports as needed
                Collaborate with other departments to ensure that HR initiatives are aligned with business objectives

                Requirements:
                
                Bachelor's degree in Human Resources, Business Administration, or a related field
                At least 5 years of experience in HR management, with a focus on recruitment, training and development, performance management, and employee relations
                Strong knowledge of HR laws, regulations, and best practices
                Excellent communication and interpersonal skills
                Strong problem-solving and analytical skills
                Detail-oriented with a strong focus on accuracy and quality
                Ability to work independently and within a team environment
                Experience with HR software and tools is a plus
                PHR or SPHR certification is a plus

                This is a full-time position with competitive compensation and benefits packages. If you are an experienced HR professional with a passion for driving employee engagement and satisfaction, we encourage you to apply.",
                'type' => 'CLT',
            ],
            [
                'title' => 'Data Scientist',
                'description' => "We are looking for a highly motivated and experienced Data Scientist to join our team on a freelance basis. As a Data Scientist, you will be responsible for analyzing and interpreting complex data sets to identify patterns and trends, develop predictive models, and provide insights and recommendations to our clients.

                Key Responsibilities:
                
                Conduct exploratory data analysis and data mining to identify patterns and trends
                Develop predictive models and algorithms to support decision-making
                Communicate insights and recommendations to clients and stakeholders
                Work with large and complex data sets, and ensure data quality and integrity
                Collaborate with cross-functional teams to develop data-driven solutions
                Stay up-to-date with the latest trends and developments in data science and analytics

                Requirements:
                
                Bachelor's or Master's degree in Data Science, Computer Science, Statistics, or a related field
                At least 3 years of experience in data science and analytics
                Strong knowledge of statistical modeling, machine learning, and data mining techniques
                Experience with programming languages such as Python or R
                Experience with data visualization tools and techniques
                Strong analytical and problem-solving skills
                Excellent communication and presentation skills
                Ability to work independently and manage multiple projects simultaneously

                This is a freelance position with the potential for ongoing work based on performance. If you are a self-motivated and results-driven Data Scientist with a passion for solving complex problems with data, we encourage you to apply.",
                'type' => 'Freelance',
            ],
            [
                'title' => 'Content Writer',
                'description' => "We are seeking a talented Content Writer to join our team on a freelance basis. As a Content Writer, you will be responsible for creating engaging, informative, and high-quality content for our website, blog, social media, and other marketing channels.

                Key Responsibilities:
                
                Write high-quality, SEO-optimized content for our website, blog, social media, and other marketing channels
                Conduct research to develop content ideas and ensure accuracy and relevance
                Edit and proofread content to ensure it meets our standards for quality, accuracy, and style
                Collaborate with internal teams to ensure that content is aligned with business objectives and brand voice
                Stay up-to-date with industry trends and best practices in content marketing and SEO

                Requirements:
                
                Bachelor's degree in Journalism, English, Communications, or a related field
                At least 3 years of experience in content writing, preferably in a digital marketing or agency setting
                Excellent writing, editing, and proofreading skills
                Strong knowledge of SEO best practices and the ability to write SEO-optimized content
                Ability to conduct research and develop content ideas
                Strong attention to detail and a focus on quality
                Ability to work independently and within a team environment
                Experience with content management systems and tools is a plus

                This is a freelance position with the potential for ongoing work based on performance. If you are a talented content writer with a passion for creating engaging and informative content, we encourage you to apply.",
                'type' => 'Freelance',
            ],            
            [
                'title' => 'Human Resources Manager',
                'description' => "We are seeking an experienced Human Resources Manager to join our team. As the HR Manager, you will be responsible for developing and executing HR strategies that support our business objectives, as well as managing all HR-related activities, including recruitment, training and development, performance management, employee relations, and compliance.

                Key Responsibilities:
                
                Develop and implement HR strategies that support business objectives and drive employee engagement and satisfaction
                Manage the recruitment and selection process, including job postings, candidate screening, interviews, and job offers
                Develop and deliver training and development programs to enhance employee skills and knowledge
                Manage employee performance, including performance evaluations, goal setting, and coaching
                Ensure compliance with HR policies, procedures, and regulations
                Manage employee relations, including conflict resolution, mediation, and disciplinary actions
                Maintain accurate HR records and prepare reports as needed
                Collaborate with other departments to ensure that HR initiatives are aligned with business objectives

                Requirements:
                
                Bachelor's degree in Human Resources, Business Administration, or a related field
                At least 5 years of experience in HR management, with a focus on recruitment, training and development, performance management, and employee relations
                Strong knowledge of HR laws, regulations, and best practices
                Excellent communication and interpersonal skills
                Strong problem-solving and analytical skills
                Detail-oriented with a strong focus on accuracy and quality
                Ability to work independently and within a team environment
                Experience with HR software and tools is a plus
                PHR or SPHR certification is a plus

                This is a full-time position with competitive compensation and benefits packages. If you are an experienced HR professional with a passion for driving employee engagement and satisfaction, we encourage you to apply.",
                'type' => 'CLT',
                'paused' => true
            ],
            [
                'title' => 'Data Scientist',
                'description' => "We are looking for a highly motivated and experienced Data Scientist to join our team on a freelance basis. As a Data Scientist, you will be responsible for analyzing and interpreting complex data sets to identify patterns and trends, develop predictive models, and provide insights and recommendations to our clients.

                Key Responsibilities:
                
                Conduct exploratory data analysis and data mining to identify patterns and trends
                Develop predictive models and algorithms to support decision-making
                Communicate insights and recommendations to clients and stakeholders
                Work with large and complex data sets, and ensure data quality and integrity
                Collaborate with cross-functional teams to develop data-driven solutions
                Stay up-to-date with the latest trends and developments in data science and analytics

                Requirements:
                
                Bachelor's or Master's degree in Data Science, Computer Science, Statistics, or a related field
                At least 3 years of experience in data science and analytics
                Strong knowledge of statistical modeling, machine learning, and data mining techniques
                Experience with programming languages such as Python or R
                Experience with data visualization tools and techniques
                Strong analytical and problem-solving skills
                Excellent communication and presentation skills
                Ability to work independently and manage multiple projects simultaneously

                This is a freelance position with the potential for ongoing work based on performance. If you are a self-motivated and results-driven Data Scientist with a passion for solving complex problems with data, we encourage you to apply.",
                'type' => 'Freelance',
                'paused' => true
            ],
            [
                'title' => 'Content Writer',
                'description' => "We are seeking a talented Content Writer to join our team on a freelance basis. As a Content Writer, you will be responsible for creating engaging, informative, and high-quality content for our website, blog, social media, and other marketing channels.

                Key Responsibilities:
                
                Write high-quality, SEO-optimized content for our website, blog, social media, and other marketing channels
                Conduct research to develop content ideas and ensure accuracy and relevance
                Edit and proofread content to ensure it meets our standards for quality, accuracy, and style
                Collaborate with internal teams to ensure that content is aligned with business objectives and brand voice
                Stay up-to-date with industry trends and best practices in content marketing and SEO

                Requirements:
                
                Bachelor's degree in Journalism, English, Communications, or a related field
                At least 3 years of experience in content writing, preferably in a digital marketing or agency setting
                Excellent writing, editing, and proofreading skills
                Strong knowledge of SEO best practices and the ability to write SEO-optimized content
                Ability to conduct research and develop content ideas
                Strong attention to detail and a focus on quality
                Ability to work independently and within a team environment
                Experience with content management systems and tools is a plus

                This is a freelance position with the potential for ongoing work based on performance. If you are a talented content writer with a passion for creating engaging and informative content, we encourage you to apply.",
                'type' => 'Freelance',
                'paused' => true
            ],            
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
