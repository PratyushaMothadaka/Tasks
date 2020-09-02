<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="/app.css">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
            <div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
                    <div class="flex-shrink-0">
                      <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
                    </div>
                    <div class="ml-6 pt-1">
                      <h4 class="text-xl text-gray-900 leading-tight">ChitChat</h4>
                      <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
                    </div>
            </div>
        <div>
            <form>
                <div>
                    <label for="email">Email</label>
                    <input class="bg-gray-200 hover:bg-white hover:border-gray-300 focus:outline-none focus:bg-white focus:shadow-outline focus:border-gray-300 ..." type="email" name="email" id="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>