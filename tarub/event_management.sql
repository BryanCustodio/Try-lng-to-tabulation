-- Table for Schedule of Activities
CREATE TABLE activities (
    activityid INT AUTO_INCREMENT PRIMARY KEY,
    datefrom DATE NOT NULL,
    dateto DATE NOT NULL,
    activityname VARCHAR(100) NOT NULL,
    description TEXT
);

-- Table for Events
CREATE TABLE events (
    eventid INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

-- Table for Contestants
CREATE TABLE contestants (
    contestantid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    eventid INT,
    FOREIGN KEY (eventid) REFERENCES events(eventid)
);

-- Table for Judges
CREATE TABLE judges (
    judgeid INT AUTO_INCREMENT PRIMARY KEY,
    judgename VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Table for Criteria
CREATE TABLE criteria (
    criteriaid INT AUTO_INCREMENT PRIMARY KEY,
    criterianame VARCHAR(100) NOT NULL,
    percentage DECIMAL(5,2) NOT NULL,
    eventid INT,
    FOREIGN KEY (eventid) REFERENCES events(eventid)
);

-- Table for Scores
CREATE TABLE scores (
    scoreid INT AUTO_INCREMENT PRIMARY KEY,
    eventid INT,
    judgeid INT,
    criteriaid INT,
    contestantid INT,
    score DECIMAL(5,2) NOT NULL,
    category VARCHAR(100),
    date DATE NOT NULL,
    FOREIGN KEY (eventid) REFERENCES events(eventid),
    FOREIGN KEY (judgeid) REFERENCES judges(judgeid),
    FOREIGN KEY (criteriaid) REFERENCES criteria(criteriaid),
    FOREIGN KEY (contestantid) REFERENCES contestants(contestantid)
);
