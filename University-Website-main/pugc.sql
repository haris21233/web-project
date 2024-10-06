-- Create the database
CREATE DATABASE pugc;

-- Use the database
USE pugc;

-- Create a table for the staff profiles
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    title VARCHAR(100),
    image_url VARCHAR(255),
    facebook_url VARCHAR(255),
    email VARCHAR(255),
    phone_number VARCHAR(50),
    description TEXT
);

-- Insert example data into the staff table
INSERT INTO staff (name, title, image_url, facebook_url, email, phone_number, description)
VALUES 
('Prof. Dr. Muhammad Ali', 'Vice Chancellor', 'images/pf-ali.jpeg', 'https://www.facebook.com/@ProfDrMuhammadAliOfficialPage/', NULL, NULL, 'My mission is to raise the productivity of our graduates through quality education and practical knowledge.'),
('Dr Muhammad Mudasar Ghafoor', 'Director General', 'images/dg-sab.jpeg', 'https://www.facebook.com/muhamamd.ghafoor', NULL, NULL, 'You are entering the most crucial phase of your life.'),
('Dr Salman Naseer Adil', 'Head of Department', 'images/dr-salam.jpeg', 'https://www.facebook.com/ar.ar143.92', NULL, NULL, 'Best Professor at PUGC.'),
('Dr Umair', 'Deputy Registrar', 'images/p-umair.PNG', 'https://www.facebook.com/umair.ali.5855', 'umairali1948@hotmail.com', '055-9201224', 'Gmail: umairali1948@hotmail.com. Cell: 055-9201224.'),
('Dr Ibrar Khan', 'Network Administrator', 'images/p-ibrar.PNG', 'https://www.facebook.com/umair.ali.5855', 'na@pugc.edu.pk', '055-9201220', 'Network Administrator at PUGC.'),
('Prof. Moodser Hussain', 'Web Development Expert', 'images/expert-web.jpeg', 'https://www.facebook.com/umair.ali.5855', NULL, NULL, 'Web Development Expert at PUGC.'),
('Mr. Shazib Maqsood Butt', 'Admin Officer', 'images/adminoffier.PNG', 'https://www.facebook.com/umair.ali.5855', 'ursshazib@hotmail.com', '055-9201225-26', 'Admin Officer at PUGC.');

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(100),
    description TEXT
);

-- Insert courses data into the courses table
INSERT INTO courses (department_name, description)
VALUES
('Department of Information Technology', 'The Department of Information Technology (IT) focuses on advancing digital solutions and innovation. We offer cutting-edge education and research to prepare students for the ever-evolving tech landscape.'),
('Department of Law', 'The Department of Law provides a comprehensive legal education, blending theory with practical experience. We prepare students to excel in various legal fields, fostering critical thinking and ethical practice.'),
('Department of Business & Accounting', 'The Department of Business & Accounting offers a dynamic curriculum that blends theory with real-world application. We prepare students for leadership roles in finance, management, and entrepreneurship.'),
('Department of English', 'The Department of English fosters a deep understanding of language, literature, and critical thinking. We offer diverse programs that explore classic and contemporary texts, preparing students for careers in writing, teaching, and beyond.');
CREATE TABLE societies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    society_name VARCHAR(255),
    society_url VARCHAR(255)
);

-- Insert societies data into the societies table
INSERT INTO societies (society_name, society_url)
VALUES
('Event Management Society', './Department/event-management.html'),
('Sports Society', './Department/sports-society.php'),
('Literary & Debating Society', './Department/literary-debating.html'),
('Alumni Association Club', './Department/alumni-club.html'),
('Blood Donor Society', './Department/blood-donor.html'),
('Qirat & Naat Society', './Department/qirat-naat.html'),
('Social Media Team', './Department/social-media.html'),
('Performing Art Society', './Department/performing-art.html'),
('Environment Protection & CSR Society', './Department/environment-protection.html'),
('Research Society', './Department/research-society.php'),
('Monthly Magazine/Gazette Society', './Department/monthly-magazine.html'),
('Entrepreneurship & Incubation Club', './Department/entrepreneurship-incubation.html'),
('Career Counseling & Placement Cell', './Department/career-counseling.html');