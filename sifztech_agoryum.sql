-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2021 at 07:27 AM
-- Server version: 10.2.37-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sifztech_agoryum`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutus_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `aboutus_title`, `aboutus_desc`, `created_at`, `updated_at`) VALUES
(1, 'OUR COMMITMENT TO YOU', '<p>We understand that the success of our customers is the essential key to the success of our business.</p><p>We work hard to sharpen our relationship with our customers and partners to support their changing needs, as well as the needs of the customers they serve.</p><p>Helping our customers achieve their goals one step at a time, one project at a time. Delivering the right technology ... at the right time. Our experience matters in getting this done.</p><p>At our core is a philosophy of service to our clients with the highest level of honesty and integrity 100%... all the time. Giving our best on each and every effort, every time out, every new project, every new product, every new technology and every new client. Until you... our client says it\'s right... we keep striving to reach that level of complete buy in and acceptance by you. Our clients are why we are here providing this service - the successes we experience with our clients is why we continue to work.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_sections`
--

CREATE TABLE `banner_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannerSectionOne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerSectionTwo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerSectionThree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_sections`
--

INSERT INTO `banner_sections` (`id`, `bannerSectionOne`, `bannerSectionTwo`, `bannerSectionThree`, `shortDesc`, `image`, `facebook_link`, `linkedin_link`, `twitter_link`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'Business', 'Solutions', 'to your Routine & Complex Business Challenges', '1864243228.jpg', 'https://www.facebook.com/Agoryum-Ventures-107226874202571/', 'https://www.linkedin.com/company/agoryum-ventures/', 'https://twitter.com/agoryumv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_thumbnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_desc`, `blog_thumbnal`, `blog_cover_image`, `created_at`, `updated_at`) VALUES
(2, 'What does a Software Engineer do?', '<p>What image comes to your mind when you think “Software Engineer?”</p><p>A super-genius-type who creates things out of thin air – like Bill Gates or Alan Turing? Or someone in a dark room, listening to techno music and typing furiously on the computer – like in The Matrix?</p><p>Maybe you envision a corporate-style engineer – wearing headphones and going to scrum meetings in an office. Or a freelance “digital nomad” engineer who codes from a cafe on the beach.</p><p>A software engineer uses computer science principles to develop software solutions that will satisfy the wants and needs of businesses and consumers. Software engineers create many types of solutions such as desktop and web applications, mobile apps, games, robots, operating systems, network systems, etc. They do so using programming languages, frameworks, databases, servers and other technologies to turn an idea into a final product.</p><p>Because software engineers work on many types of projects, they also take on varying job roles, responsibilities, and even personas – like all the images we described above.</p><p>Keep reading to learn what do software engineers do, including sample software engineer job descriptions, career paths, salaries, industries, and how to become a software engineer.</p><p>&nbsp;</p><p><a href=\"https://giphy.com/gifs/bro-matrix-keanu-3pzLJifxEvLpe\">via GIPHY</a></p><h2>Table of Contents</h2><ul><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#what-gives\">First, software developer vs software engineer – what gives?</a></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#software-engineer-responsibilities\">What does a software engineer do – Responsibilities</a><ul><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#day-of-life\">A day in the life of a Software Engineer</a></li></ul></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#career-paths\">Software engineer career paths</a></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#software-engineer-salaries\">Software engineer salaries</a></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#software-engineer-requirements\">Software engineer requirements</a></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#industries-employ\">Industries that employ software engineers</a></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#love-hate\">What do software engineers love/hate about their jobs?</a></li><li><a href=\"https://codingnomads.co/blog/what-does-a-software-engineer-do/#how-to-become\">How to become a software engineer</a></li></ul><h2>First, software developer vs software engineer – what gives?</h2><p>In the industry, the terms ‘software developer’ and ‘software engineer’ are used interchangeably. We will also use them interchangeably in this article. But since this is a common question, here’s a quick explanation for what is the difference between a software developer vs. software engineer:</p><p>A software engineer is someone who applies computer science and engineering concepts to create software solutions. A software engineer understands why the code works, and the best, most efficient way to write it.</p><p>On the other hand, a software developer is the creative driving force behind making the solution come to life.</p><p>In more concrete terms, a software engineer <strong>architects</strong> software solutions by making plans and designing the system, so the software developer can <strong>build</strong> the solution with code.</p><p>There is a whole <a href=\"https://www.reddit.com/r/cscareerquestions/comments/36tjll/software_developer_vs_software_engineer/\">thread </a>on Reddit on this topic, with the responses varying from: “It doesn’t matter at all.” To: “In Canada you have to be licensed (i.e. have a degree which says Engineering) to have Engineer in your title.” And our favorite: “My acceptance letter said ‘Software Developer’, but one day, I decided to change my job title on our website to ‘Engineer’. That was like 2 years ago and nobody has noticed and/or cared.”</p><p>We agree that “engineer” has a bit more weight to it than “developer,” but for simplicity’s sake we’ll use them interchangeably. So now: What do software engineers do?</p><p>&nbsp;</p><p><a href=\"https://giphy.com/gifs/james-franco-same-but-different-C6JQPEUsZUyVq\">via GIPHY</a></p><h2>What does a software engineer do – Responsibilities</h2><p>Software engineers support the product delivery process to take a project from its goals and requirements to the final product.</p><p>Here are sample responsibilities taken from job postings on <a href=\"https://www.indeed.com/\">Indeed.com</a>:</p><h4>Software Engineer at a Fintech company</h4><ul><li>Design, implement, test and maintain logic and components.</li><li>Design and build systems with automated instrumentation and monitoring.</li><li>Consistently improve maintainability and stability of the codebase.</li><li>Collaborate with Product &amp; Business Operations teams to translate business requirements and build highly robust and scalable products.</li></ul><h4>Backend Web Developer at a startup</h4><ul><li>Collaborate with front-end developers to resolve API issues.</li><li>Develop and maintain secure and stateless web services.</li><li>Build reusable code and libraries for future use.</li><li>Analyze and debug issues in a complex client/server environment.</li></ul><h4>Data Engineer</h4><ul><li>Help build robust data pipelines and ETL tools.</li><li>Address and predict data performance bottlenecks.</li><li>Retrieve and aggregate data from multiple sources into a digestible and actionable format.</li><li>Identify, design, and implement internal process improvements: automating manual processes, optimizing data delivery, re-designing infrastructure for greater scalability.</li></ul><h2>A day in the life of a Software Engineer</h2><p>If you thought that engineers spent all their time coding, like this cat, think again!</p><p>&nbsp;</p><p><a href=\"https://giphy.com/gifs/JIX9t2j0ZTN9S\">via GIPHY</a></p><p>We collected the daily routines of various software engineers from <a href=\"https://www.toppr.com/bytes/life-software-engineer/\">here</a>, <a href=\"https://www.coderhood.com/a-day-in-the-life-of-a-software-engineer/\">here</a> and <a href=\"https://blog.projectshift.io/blog/day-life-software-engineer\">here</a> to create this sample representation of what a software engineer does on a day-to-day basis.</p><p>Just like there is no single recipe to make spaghetti, even a “typical day” in the life of software engineers always comes with new twists and interesting problems to solve.</p><p><strong>7:30 am – Wake up</strong></p><p>Not all software engineers wake up early. But most, especially those with families, prefer to spend early hours in the office and have the evenings to themselves. For those working from an office, arriving early also helps beat rush hour traffic!</p><p><strong>8:30 am – Reach office and check email</strong></p><p>Especially with today’s global teams, there is almost always someone working on or using your product when you are asleep. And if new tasks come up, or something breaks during the night? You know about it the second you check your email.</p><p><strong>9:00 am – Start coding</strong></p><p>Writing code can be as creative as writing a story, and requires intense concentration to work effectively. This is why many developers wear headphones when working – to cancel out external noise and signal that you prefer not to be disturbed.</p><p><strong>11:30 am – Daily / Weekly standup meeting</strong></p><p>Many effective engineering teams use the <a href=\"https://www.guru99.com/agile-scrum-extreme-testing.html\">Agile method of development</a>, where teams meet regularly to discuss their tasks and requirements to keep forward momentum. These meetings last between 15-60 minutes, depending on the team size and frequency of the meetings.</p><p><strong>12:15 pm – Hunger strikes!</strong></p><p>Whether you work for a large corporation that offers catered lunches, or a small startup where you leave the office to grab lunch, engineers find it important to take breaks to eat and rest during the day.</p><p><strong>1:30 pm – Back to coding, usually with coffee/ tea</strong></p><p>This is the part where the engineer goes back to coding or solving bugs. Again, it is usually a long time before the engineer resurfaces.</p><p><strong>4:00 pm – Collaboration meetings</strong></p><p>Technology is constantly evolving and improving, so even when products are “complete” they must be constantly refined to fit new user needs, the latest in cybersecurity, and the latest technologies. Building software with a team requires meeting with clients or teammates – something that many software engineers detest, but a necessity for getting the job done.</p><p><strong>6:00 pm – Send emails and wrap up for the day</strong></p><p>Usually, engineers send emails to their counterparts about what they completed that day, reply to any another email that may have come up during the day, and then close their computers to enjoy the rest of their day.</p><h4>It’s not all coding!</h4><p>As you can see, a developer spends time doing many other tasks than just writing code. According to a <a href=\"https://www.infoworld.com/article/2613762/software-engineers-spend-lots-of-time-not-building-software.html\">survey</a> conducted by Electric Cloud, developers spend up to 54% of their time on non-coding tasks.</p><p>While the exact time spent on these tasks varies based on the development phase, the graphic below depicts what software engineers do in an average week.</p><figure class=\"image\"><img src=\"https://codingnomads.co/wp-content/uploads/2019/11/elasticcloud_swengineer_hours.png\" alt=\"software engineer working hours\"></figure><p>Image Source: <a href=\"https://www.infoworld.com/article/2613762/software-engineers-spend-lots-of-time-not-building-software.html\">Infoworld</a></p><h2>Software engineer career paths</h2><p>There are many different career paths for software engineers beyond coding jobs. As a result, the Bureau of Labor Statistics <a href=\"https://www.bls.gov/ooh/computer-and-information-technology/software-developers.htm\">predicts</a> that jobs for software engineers will grow by 21% in the next ten years. The predicted growth rate for all occupations comes in at only 5%.</p><p>Below we’ve outlined some of the most common software engineer career paths, and what a software engineer does in these roles:</p><h4>Web Developer</h4><p>Web developers create websites and applications to present information and services on the web. A Front-end web developer ensures that information is readable and engaging with a good user experience. Back-end web developers ensure proper functionality, and that applications are quick to load across devices, internet connection speeds, and languages.</p><h4>Mobile Developer</h4><p>Mobile developers build applications for iOS and Android mobile operating systems. They ensure that the same application works seamlessly across different screen sizes, operating system versions, and platforms.</p><h4>Test &amp; Quality Assurance Engineer</h4><p>Quality assurance engineers are responsible for catching bugs in the code and ensuring that the codebase is of high quality.</p><h4>Systems Engineer</h4><p>Systems engineers create systems that are a blend of hardware and software. They focus on larger issues in the design and creation of systems, such as requirements, reliability, performance, maintenance, and logistics.</p><h4>Machine Learning Engineer / Data Scientist</h4><p>Data scientists use statistics and machine learning algorithms to solve critical business problems. Their main strength lies in clearly explaining their findings so that businesses can make informed decisions.</p><h4>Data Engineer</h4><p>Data engineers prepare the data to be consumed by data scientists. Some of their duties include getting the data from the source, cleaning it, transforming it and storing it so that it can be efficiently accessed and used by others.</p><h4>Database Administrator</h4><p>Database administrators design and maintain databases. Some of their duties include troubleshooting issues with the database, recovering data, and creating access control protocols.</p><h4>Project Manager</h4><p>Project managers oversee a project end-to-end, from planning to procurement to the execution of a project. While not all project managers are software engineers, they benefit from having engineering knowledge and skills to effectively plan and work with engineers for project delivery. Project managers are usually the first point of contact for any issues or discrepancies in the project.</p><h4>Product Manager/Owner</h4><p>Product owners are responsible for having a vision of the product that needs to be built, and conveying that vision to the development team. They understand the market, the customer and the business, and why the product needs to be what it is. Once again, not all product managers/owners need to be engineers, but they can seriously benefit from these skills.</p><h4>Scrum Master</h4><p>A scrum master facilitates the development process for an Agile development team. Some of their duties include removing obstacles that are impeding the team’s progress, and helping the team reach consensus for what can be achieved during a specific period.</p><h2>Software engineer salaries</h2><p>It is no secret that software engineers are some of the highest-paid employees across the world. The Bureau of Labor Statistics puts the <a href=\"https://www.bls.gov/ooh/computer-and-information-technology/software-developers.htm\">median salary</a> of software engineers in the United States at $88,000 per year. What does a software engineer do to make so much money? Oftentimes tasks that are highly complex and specialized – this is why they get paid the big bucks!</p><p>You can see the varying salaries by career path in the graphic below.</p><figure class=\"image\"><img src=\"https://codingnomads.co/wp-content/uploads/2019/11/SoftwareEngineerSalariesGraph.png\" alt=\"what does a software engineer do, what do software engineers do, software engineer salary\"></figure><p>Data source: <a href=\"https://www.payscale.com/research/US/Country=United_States/Salary\">Payscale</a></p><h3>Software engineer salaries around the world</h3><p>For an idea of what software engineers around the world can expect to make on average, see the graphic below:</p><figure class=\"image\"><img src=\"https://codingnomads.co/wp-content/uploads/2019/11/software-engineer-salary-worldwide.png\" alt=\"software engineers salary worldwide\"></figure><p>Image source: <a href=\"https://www.daxx.com/blog/development-trends/it-salaries-software-developer-trends-2019\">Daxx</a></p><h2>Software Engineer Requirements</h2><p>Obviously strong coding skills are required for the job, but what else does a software engineer do to secure a great job? Every coder must also possess certain soft skills to qualify for today’s software engineering jobs. We’ve listed them in no particular order, and this list is by no means exhaustive. But if you feel comfortable conveying several of the attributes below, you will be in good shape to get a software engineering job:</p><ul><li>Good communication skills</li><li>Knowledge of at least one programming language</li><li>Aptitude for logical thinking and problem solving</li><li>Grit – the ability to stay motivated in a challenging and constantly evolving environment</li><li>Understanding of the software development process</li><li>Creativity to develop software from ideas</li><li>Good analytical skills to understand users’ needs and develop a solution for them</li><li>Culture Fit / Likeability – companies want to work with people they’ll enjoy working with</li><li>Ability to write good tests</li><li>Understanding of computers and computer systems</li></ul><p>You’ll notice that we did not include a university degree in Computer Science or engineering-related field. Although you may see this on many software engineer job descriptions, the truth is that the demand for engineers far outpaces the number of engineers with university degrees. This causes hiring managers to value the skills you have over your university credentials – another reason why intensive software engineering training courses like CodingNomads exists!</p><h2>Industries that employ software engineers</h2><p>With the rise of digital services, almost every industry worldwide employs software engineers. Some examples of industries and the type of project that a software engineer may handle are listed below –</p><ol><li><strong>Finance:</strong> Create a trading platform so that investment bankers at firms like Goldman Sachs can conduct their trading.</li><li><strong>Healthcare:</strong> Analyze patient data to provide better healthcare and create systems that increase the efficiency of the healthcare process.</li><li><strong>Retail:</strong> Help retail stores like Walmart or Target create and maintain their online shopping website.</li><li><strong>Government:</strong> Ensure that super-sensitive data remains safe and unhackable.</li><li><strong>Human resources:</strong> From automated resume scanners to applicant tracking systems, software engineers create many systems to ease the life of recruiters.</li><li><strong>Energy:</strong> Create the systems that track energy produced and consumed around the world.</li><li><strong>Real Estate, Transportation, Science, Space Exploration and so many more!</strong></li></ol><p>To give you an idea of some numbers, here is a chart created by iDataLabs on the volume and distribution of companies using Python by industry.</p><figure class=\"image\"><img src=\"https://codingnomads.co/wp-content/uploads/2019/11/python_industry.png\" alt=\"python use by industry\"></figure><p>Image source: <a href=\"https://enlyft.com/tech/products/python\">iDataLabs</a></p><h2>What do software engineers love/hate about their jobs?</h2><p>When asking various software engineers about their favorite – and least favorite – aspects of their jobs, we got a lot of lively responses.</p><h3>What do software engineers love about their jobs?</h3><figure class=\"image\"><img src=\"https://s.w.org/images/core/emoji/13.0.0/svg/2764.svg\" alt=\"❤️\"></figure><p>Stephanie: “I love pair/mob programming, as I can be social in addition to learning a lot from others…”</p><p>Anonymous: “The thrill of actual real people using the software I made/contributed to [which] helps them in some way…”</p><p>Toshia: “I love the culture where I work. I love being treated as an equal, respected, trusted, and heard…I love a flexible work schedule, that allows me to work from home as needed, and I’m trusted to get my job done with no one watching my “clocked hours.”</p><blockquote><p><i>Laura: “Designing and implementing solutions to problems. I find it very satisfying to solve the puzzles I encounter every day.”</i></p></blockquote><h3>What do software engineers dislike about their jobs?</h3><figure class=\"image\"><img src=\"https://s.w.org/images/core/emoji/13.0.0/svg/1f44e.svg\" alt=\"👎\"></figure><p>We received several anonymous responses from women about male/female discrepancies in the workplace such as, “Only men get promoted,” and “Something that I have [to] deal with daily is the “bro culture”, it’s just disappointing and frustrating.”</p><p>Others talked about work-life balance struggles:</p><p>“What I dislike about the role is there is no work life balance, you are working 12-14 hr days…”</p><p>“Most companies say they care about work life balance or inclusion but you don’t see them making efforts in that direction. For example, I was coding and the ergonomic software I had installed that reminds to blink your eyes came up and my boss went “Does that not disturb your work?”</p><blockquote><p><i>“Bad documentation is the worst! …but I also hate writing documentation.”</i></p><figure class=\"image\"><img src=\"https://s.w.org/images/core/emoji/13.0.0/svg/1f606.svg\" alt=\"😆\"></figure></blockquote><p>You’ll notice that some responses in the love category also had equal and opposite responses in the hate category. This highlights how much company culture and leadership can impact a software engineering environment.</p><h2>How to become a software engineer</h2><p>Most people become software engineers either by getting a university degree, attending a coding bootcamp, or learning on you own.</p><p>While a university degree is always an asset for finding work, today’s university programs do not adequately prepare graduates for the day-to-day tasks required of professional software engineers. CodingNomads’ Cofounder and Java Curriculum Developer Ryan Desmond agrees from his experience:</p><blockquote><p><i>Even after receiving my Computer Science degree, I felt like I had to Google every aspect of my job. My first few months consisted of many sleepless nights trying to figure out basic engineering tasks like spinning up servers. Sleepless nights, and a lot of coffee! —Ryan Desmond, </i><a href=\"https://codingnomads.co/\"><i>CodingNomads</i></a><i>.</i></p></blockquote><p>University education also takes years to complete, and especially in the US, can cost tens of thousands of dollars. And given the demand for engineers, many employers place more importance on the skills you have than a university degree. These combined drawbacks of university education led to the rise of coding bootcamps as a viable option for breaking into engineering.</p><p>Coding bootcamps are intensive software engineering training programs that students complete in months. According to <a href=\"https://www.coursereport.com/reports/coding-bootcamp-market-size-research-2019\">Course Report</a>, the average tuition price of in-person courses in the United States $13,584, with an average program length of 15.1 weeks.</p><p>Without the overhead of a physical year-round location, CodingNomads provide a more affordable alternative to other US bootcamps, offering Java and Python training curriculum both in-person and online for a fraction of the average US price. Although coding bootcamps can accelerate your learning (and getting a paying job!), they do still cost money.</p><p>This leads to the third most common way that people become software engineers – by learning on your own. As you probably already know, you can learn to code online with free / low cost resources like Youtube, courses like <a href=\"https://online-learning.harvard.edu/course/cs50-introduction-computer-science\">Harvard CS50</a>, and forums like Reddit and StackOverflow. If you are self-motivated and disciplined enough, you can indeed learn to code entirely for free.</p><p>No matter which way you choose to learn to code, we always encourage starting online for free. This way, you can see if you like coding before investing (or wasting!) time and money on a course. To get started learning for free, you can preview our Java and Python online courses on our <a href=\"https://platform.codingnomads.co/?utm_source=CodingNomads&amp;utm_medium=blog&amp;utm_campaign=what-does-a-software-engineer-do\">online learning platform</a>.</p><figure class=\"image\"><img src=\"https://codingnomads.co/wp-content/uploads/2019/04/PlatformScreen_Python_Mac_600px.png\" alt=\"\"></figure><h2>What do software engineers do? Lots of things!</h2><p>Software engineering is applied in endless ways – from various day-to-day responsibilities, career paths, industries, skills requirements, and even the way you learn it.</p><p>With so many avenues to explore, sometimes it’s helpful to learn what NOT to do… Keep reading to learn about <a href=\"https://codingnomads.co/blog/learn-to-code/worst-way-to-learn-to-code/?utm_source=CodingNomads&amp;utm_medium=blog&amp;utm_campaign=what-does-a-software-engineer-do\">what NOT to do when learning to code</a>.</p>', '235790746.jpg', '375867929.jpg', '2021-05-20 10:22:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `casestudies`
--

CREATE TABLE `casestudies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_thumbnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casestudies`
--

INSERT INTO `casestudies` (`id`, `case_title`, `case_thumbnal`, `case_file`, `case_status`, `created_at`, `updated_at`) VALUES
(1, 'Cloud Migration', '686926136.jpg', '539873395.pdf', '0', NULL, NULL),
(4, 'Application Development', '581525431.jpg', '802727668.pdf', '0', NULL, NULL),
(6, 'Website Development', '431664067.jpg', '1138034279.pdf', '0', NULL, NULL),
(8, 'Application Code Review', '1913061950.jpg', '767723932.pdf', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clientbgs`
--

CREATE TABLE `clientbgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientbgs`
--

INSERT INTO `clientbgs` (`id`, `clients_background`, `created_at`, `updated_at`) VALUES
(1, '1750516134.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clients_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_review` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `clients_photo`, `company_logo`, `client_review`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', '928444044.png', '1512393528.png', 'From start to finish, our project was handled above our expectations. The Team at Agoryum understood our goals, walked us through the process and showed us where we could go. For us, there has been no better clarity and focus provided by any development team', NULL, NULL),
(2, 'Clark Dev', '736606606.png', '1722050601.png', 'Working hand in hand with Agoryum, we were able to move our prototype software from initial idea to operational tool. Guided UI/UX workshops, Development Models and Prospective pathways, Agoryum cooperated with our teams to meet these necessities. With clear understanding of how business works, Agoryum guided our teams to a strong future.', NULL, NULL),
(3, 'John Dc', '2012754969.png', '477888593.png', 'With strict deadlines and budget constraints, Agoryum brought our product to market well before the deadline. Without compromising on quality, the Team at Agoryum masterfully moved with us along the development cycle into implementation and finally into delivery. For us, there is no better understanding of customer satisfaction executed by any other partner that we have worked with.', NULL, NULL),
(4, 'DisA', '2095036234.png', '459280525.png', 'With the need for fast development work, Agoryum was able to directly lead our team for a shift from our Amazon Web Services Platform over to the Google Cloud Platform. We needed a complete lift and shift of all our assets and when we thought it impossible, Agoryum clearly outlined how we could get it done. With the fast shift our company has been positioned as we needed and can continue to grow.', NULL, NULL),
(5, 'Ryan S.', '1988632085.png', '1328271401.png', 'With our code in an outdated state, we needed a development team that would be able to spot inconsistencies in our code and optimal points for efficiencies to be enacted. WIth those clear stipulations, Agoryum was able to go through our Platform which was built on Angular, and clearly outline the path forward. Working in tandem with Agoryum\'s development teams, we were able to successfully find the holes in our code and effectively rebuild our Platform to the latest version. Agoryum got the job done.', NULL, NULL),
(6, 'Clark Dev', '582608730.png', '528055695.png', 'From start to finish, our project was handled above our expectations. The Team at Agoryum understood our goals, walked us through the process and showed us where we could go. For us, there has been no better clarity and focus provided by any development team.', NULL, NULL),
(7, 'Clara', '549192187.png', '884403609.png', 'From start to finish, our project was handled above our expectations. The Team at Agoryum understood our goals, walked us through the process and showed us where we could go. For us, there has been no better clarity and focus provided by any development team.', NULL, NULL),
(8, 'Isam S.', '686476739.png', '1886987923.png', 'From start to finish, our project was handled above our expectations. The Team at Agoryum understood our goals, walked us through the process and showed us where we could go. For us, there has been no better clarity and focus provided by any development team.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer_background`, `created_at`, `updated_at`) VALUES
(1, '331529266.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_15_024040_create_sitesettings_table', 1),
(5, '2021_05_15_040301_create_banner_sections_table', 1),
(6, '2021_05_15_152439_create_homes_table', 1),
(7, '2021_05_15_172348_create_casestudies_table', 1),
(8, '2021_05_16_033606_create_services_table', 1),
(9, '2021_05_16_134804_create_clients_table', 1),
(10, '2021_05_16_160458_create_technologies_table', 1),
(11, '2021_05_16_164400_create_videos_table', 1),
(12, '2021_05_17_015550_create_sections_table', 1),
(13, '2021_05_17_021552_create_aboutuses_table', 1),
(14, '2021_05_17_023209_worked', 1),
(15, '2021_05_17_091218_create_contacts_table', 1),
(16, '2021_05_19_150458_create_clientbgs_table', 2),
(18, '2021_05_19_153236_create_videobgs_table', 3),
(19, '2021_05_19_155156_create_footers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_thumbnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_desc`, `service_banner`, `service_thumbnal`, `created_at`, `updated_at`) VALUES
(6, 'Web & App Development', 'Web & App Development involves the creation, process and life cycle of the Application, Website or Platform Integrations aimed at helping you complete a task. Focusing on the goals and targets of your team, we utilize the tools of Core-Engineering to strengthen your strategies and provide the right framework for success.', '1935880694.jpg', '1651621728.jpg', NULL, NULL),
(8, 'Internet-of-Things-(IoT)', 'Internet-of-Things (IoT) saves you time and money by creating a pathway for devices to communicate. We implement solutions to monitor data, automation of routine procedures and predicting the optimization of resources. Focus on what matters, embed IoT in the rest Through our comprehensive approach, we provide more control for your business by reducing human error through simplifying and integrating your operational ecosystem.', '995536862.jpg', '1345642303.jpg', NULL, NULL),
(9, 'Web & App Development', 'Web & App Development involves the creation, process and life cycle of the Application, Website or Platform Integrations aimed at helping you complete a task. Focusing on the goals and targets of your team, we utilize the tools of Core-Engineering to strengthen your strategies and provide the right framework for success.', '1624396253.jpg', '962990434.jpg', NULL, NULL),
(10, 'DevOps & Cloud Services', 'Web & App Development involves the creation, process and life cycle of the Application, Website or Platform Integrations aimed at helping you complete a task. Focusing on the goals and targets of your team, we utilize the tools of Core-Engineering to strengthen your strategies and provide the right framework for success.', '361559059.jpg', '1849053117.jpg', NULL, NULL),
(11, 'Cyber Security', 'In a world of interconnected devices and data, a business requires cybersecurity to ensure safety and security for all those involved. Cybersecurity is a vision to ensure a forward thinking approach of preventive control measures to achieve high-level security and protection of data, people and assets.', '1085630535.jpg', '426739402.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siteName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `siteName`, `metadescription`, `logo`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Agoryum', 'This is a meta description', '190704858.png', 'orange.oracal789@gmail.com', '01789838721', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tech_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `tech_name`, `tech_logo`, `created_at`, `updated_at`) VALUES
(1, 'Codintiger', '512170009.png', NULL, NULL),
(2, 'AZUS', '1070370398.png', NULL, NULL),
(3, 'BRAND', '1325266864.png', NULL, NULL),
(4, 'AWS', '1807949548.png', NULL, NULL),
(5, 'REACT NAVTIVE', '1077703113.png', NULL, NULL),
(6, 'NODE JS', '1265162102.png', NULL, NULL),
(7, 'Dokker', '403449929.png', NULL, NULL),
(8, 'PHP', '915267459.png', NULL, NULL),
(9, 'Python', '1196701348.png', NULL, NULL),
(10, 'Java', '998641306.png', NULL, NULL),
(11, 'Mongo DB', '41499968.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sifat Kazi', 'orange.oracal789@gmail.com', NULL, '$2y$10$omsUl1gfW6lhK5WdOKAW.uvkBHWIDKo4EHi8mAIb60rZa20tUqmF.', '2CQLpAzzb91awRKcYqLQZ485wmZKKTS23vyfHsifxShzLIrEmGTvmpogz4R6', '2021-05-19 02:22:07', '2021-05-19 02:22:07'),
(2, 'Nancy', 'beequintessential@gmail.com', NULL, '$2y$10$LY1gEIL.6Uvcl0N6UR6DuOgVmA4nIk2gY5tIPnfsX57WGu.CWN8DC', 'gK9iTSaTAbpM9rERvzd3g0FTg7pC696lSHxaqiXneZriP9fmvy5RVqwPhcxi', '2021-05-20 07:56:03', '2021-05-20 07:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `videobgs`
--

CREATE TABLE `videobgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `videos_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videobgs`
--

INSERT INTO `videobgs` (`id`, `videos_background`, `created_at`, `updated_at`) VALUES
(1, '29189722.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_short_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_title`, `video_short_desc`, `video_link`, `created_at`, `updated_at`) VALUES
(1, 'THOUGHTS, BELIEFS AND THE FUTURE', 'DIGITAL TRANSFORMATION: ARE YOU READY FOR EXPONENTIAL CHANGE?', 'https://www.youtube.com/embed/ystdF6jN7hc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `worked`
--

CREATE TABLE `worked` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worked_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worked_desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worked_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worked_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worked_budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worked`
--

INSERT INTO `worked` (`id`, `worked_title`, `worked_desc`, `worked_image`, `worked_name`, `worked_budget`, `created_at`, `updated_at`) VALUES
(1, 'The Future of today', 'Social Media Focus (2010) Client Acquisition Social media Space Digital Marketing Space (2012) Agoryum.com - US, UK, South Africa (2013)', '1144698091.jpg', 'John Doe', '$1000', NULL, NULL),
(2, 'Internet Investment', 'Broadcasting (1971) NBN Radio Syndication 300 Markets (1972) National Association of Broadcasters (1976) White House Business Politics (1976)', '1686660516.jpg', 'John Doe', '$1.2 Billion+', NULL, NULL),
(3, 'A social Media website like facebook', 'At our core is a philosophy of service to our clients with the highest level of honesty and integrity 100%... all the time. Giving our best on each and every effort, every time out, every new project, every new product, every new technology and every new client. Until you... our client says it\'s right... we keep striving to reach that level of complete buy in and acceptance by you. Our clients are why we are here providing this service - the successes we experience with our clients is why we continue to work.', '648976801.jpg', 'John Doe', '$1000', NULL, NULL),
(4, 'Cable System Operation Cellular Activity', 'WWRL AM Radio NYC - (1980) WDAS AM/FM Radio Philadelphia (1986) QUICS Cable Time Warner Inner City (1986) Detroit Cellular (1988)', '960213134.jpg', 'John Doe', '$1.2 Billion+', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_sections`
--
ALTER TABLE `banner_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casestudies`
--
ALTER TABLE `casestudies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientbgs`
--
ALTER TABLE `clientbgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videobgs`
--
ALTER TABLE `videobgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worked`
--
ALTER TABLE `worked`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_sections`
--
ALTER TABLE `banner_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `casestudies`
--
ALTER TABLE `casestudies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clientbgs`
--
ALTER TABLE `clientbgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videobgs`
--
ALTER TABLE `videobgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worked`
--
ALTER TABLE `worked`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
