F1. Authentication and Authorisation
    This lesson taught me how to register, log in, and log out users in my LibSys Portal project using Laravel authentication. Authorisation, or controlling what authenticated users are allowed to do, will be covered further in the next meeting.

F2. Why does a successful login call session()->regenerate()?
    After a successful login, my LibSys Portal regenerates the session ID to protect the application against session fixation attacks. If I skip this step, an attacker may be able to reuse a session ID that was known before the user logged in.

F3. Why does a failed login use the same message for a wrong password and an unknown email?
    My login page uses the same error message for both cases to prevent strangers from discovering which email addresses are registered in the system. This helps protect the privacy and security of LibSys Portal accounts.

F4. Why do index and show stay public while create/edit/update/destroy use auth?
    The subjects list and subject detail pages are public so visitors can browse the available subjects without logging in. Creating, editing, updating, and deleting subjects require authentication because these actions change the project's data.

F5. Why is hiding Add and actions not enough to secure those actions?
    Hiding the Add, Edit, and Delete buttons only changes what guests can see on the page; it does not prevent them from accessing the URLs directly. The auth middleware protects these routes by redirecting users who are not logged in to the login page.

F6. Why does auth middleware care that the route is named exactly login?
    Laravel's auth middleware uses the route named login when redirecting unauthenticated visitors to the login page. If I rename that route to signin, Laravel cannot find the expected login route and displays a Route [login] not defined error.