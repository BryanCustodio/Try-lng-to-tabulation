create a step by step to build tabulation system php and sql

Manage Schedule of Activities (activityid, datefrom, date to, activity name, description)

Manage Events (eventid, date, name of event, description)

Manage Contestant (contestantid, name, department, eventid)

Manage Judges (judegeid, judgename, username, password)

Manage Criteria (criteriaid, criterianame, percentage, eventid)


Manage Scores (scoreid, eventid, judgeid, criteriaid, contestandid, score, category, date)

Reports

Overall Winner for specific event
Winner per Criteria for specific event
Judge

Select Events and Login to the System
Select Contestant
Display the criteria to be graded
Submit scores
System Flow

Admin

Admin will encode all the events
Admin will encode all the contestants
Admin will encode all the judges
Admin will encode all the judging criteria
Judges

The judge will have to select first activity or event before he or she logs on to the system.
The system will present the list of candidates for that specific event.
After the judge has selected a candidate, the system will present the list of judging criteria for that event.
The judge will now rate and save the score.
The system will then return to the list of candidates, and will repeat the steps from 3 to 5.

Admin

View and print the results/winner for specific event (3rd, 2nd, 1st, grand winner)
View and print the results/winner per judging criteria for a specific event (best in gown, best in talent, etc.)

judge_login.php
overall_winner.php
submit_scores.php
winner_per_criteria.php
add_judge.php
add_event.php
add_criteria.php
add_contestant.php
add_activity.php