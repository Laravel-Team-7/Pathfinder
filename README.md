# Job Board

Build a job board where companies can post jobs and candidates can find relevant jobs.
Feel free to use any template, tools for your development. We’re not going to provide any materials this time.

## Primary Requirements

3 types of users

-   [x] Admin
-   [x] Company representatives
-   [x] Candidates

Job post fields (Figure out the relevant job fields by searching available job platforms)

## Basic Features

Companies can create an account

-   [x] In the registration field they need to provide information like Company name, email, contact number, Website/LinkedIn page etc.
        The account will be available after the ‘Admin’ approved it

-   [ ] After the account approval by admin the companies can start creating jobs

-   [ ] Jobs must have ‘Tags’ based on language, frameworks etc. (One job can have multiple tags)
-   [ ] To simplify the overall implementation, you can only accept ‘links’ to the application form. You don’t need to provide ‘Application form building’ feature to the companies. They can use Google form or any other tools/services to create their application form and add the link to the job post.
-   [ ] Companies can manage the job posts from their dashboard
-   [ ] Companies can set an ‘expiration date’ to a job. After the expiration date the job won’t be visible publicly, but they can see the jobs in their dashboard.
-   [ ] Candidates can see available jobs in the website.
-   [ ] Candidates can search the jobs by ‘Tag’, ‘Location’, ‘Salary range’ etc.
-   [ ] Admin can manage users, jobs etc. from their dashboard.

## Advanced Features

-   [ ] One company can’t have more than 3 active jobs at a given time. They can post more jobs once the active jobs are expired or they mark them as inactive.
-   [ ] Candidates can ‘subscribe’ to the jobs by selecting ‘Categories’ and will get notified via email when any job is posted on the selected category.
-   [ ] Add pricing. In ‘Free plan’ users can only create 3 jobs. In the ‘Premium plan’, users can create unlimited jobs. (You need to integrate payment gateway for this)
-   [ ] Add an RSS feed so that someone can read the job posts via RSS feeds.
-   [ ] Keep track of ‘Clicks’ on the ‘Apply’ button and show it to the Companies in their dashboard.
-   [ ] Keep track of ‘Job post’ views and show it to the Companies in their dashboard.
