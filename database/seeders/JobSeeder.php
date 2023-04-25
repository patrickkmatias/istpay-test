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
            
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
