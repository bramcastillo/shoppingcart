<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" type="image/png" href="img/brand/favicon.png" />
        <link rel="stylesheet" href="dist/assets/styles/glider.min.css" />
        <link rel="stylesheet" href="dist/assets/styles/main.css" />
        <title>
            Delete Account | About the fit
        </title>
    </head>

    <body id="bodyJsPointer">
        <!-- Notification -->
        @include('components.notification')

        <!-- Overlay -->
        <div id="overlay"></div>

        <!-- Navigation bar -->
        @include('sections.navbar')

        <!-- Actual content -->
        <div class="container">
            <div class="delete-account-container">
                <h2 class="black">Confirm Account Deletion</h2>
                <p>We're sorry you want to leave. We need you to confirm that this is actually what you want to do and that you're aware of what will happen. If you click the "Delete my account" button, the following information will be deleted <strong>permanently</strong>:</p>
                <ul>
                    <li>Your user account.</li>
                    <li>Your session history.</li>
                    <li>Items you had in your cart.</li>
                    <li>Reviews you've written</li>
                </ul>
                <p class="mt-2">Do you want to continue?</p>

                <form action="delete-account" method="post" class="mt-2">
                    <button type="submit" class="btn btn--primary">
                        Yes, delete my account
                    </button>

                    <a href="profile" class="btn btn--blank black">
                        No, go back
                    </a>
                </form>
            </div>
        </div>

        <!-- Footer -->
        @include('sections.footer')

        <script
            src="https://kit.fontawesome.com/eea5dcc8ef.js"
            crossorigin="anonymous"
        ></script>
        {{-- <script src="dist/assets/js/glider.min.js"></script> --}}
        <script src="dist/assets/js/app.js"></script>
    </body>
</html>