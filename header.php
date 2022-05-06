<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RotaVirusPred</title>
  </head>
  <body class="min-h-screen text-lg flex flex-col">
    <nav class="bg-gray-100">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
          <div class="flex">
            <!-- logo -->
            <div>
              <a href="#" class="flex py-4">
                <span class="px-2 font-bold"> RotaVirusPred </span>
              </a>
            </div>
          </div>

          <!-- secondary nav -->
          <div class="hidden mx-2 md:flex items-center">
            <a href="./index.php" class="px-3 hover:underline py-2 mx-1 rounded"
              >Home</a
            >

            <a
              class="px-3 hover:underline py-2 mx-1 rounded"
              href="./predict.php"
              >Predict</a
            >
            <a class="px-3 hover:underline py-2 mx-1 rounded" href="./help.php"
              >Help</a
            >
            <a class="px-3 hover:underline py-2 mx-1 rounded" href="./team.php"
              >Team</a
            >
            <a
              class="px-3 hover:underline py-2 mx-1 rounded"
              href="./contact.php"
              >Contact</a
            >
          </div>
          <!-- mobile button goes here -->
          <div class="md:hidden flex items-center">
            <button class="mobile-nav-btn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16m-7 6h7"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- mobile menu -->
      <div class="mobile-nav hidden md:hidden">
        <a class="block py-2 px-4 text-sm" href="./index.php">Home</a>
        <a class="block py-2 px-4 text-sm" href="./predict.php">Predict</a>
        <a class="block py-2 px-4 text-sm" href="./help.php">Help</a>
        <a class="block py-2 px-4 text-sm" href="./team.php">Team</a>
        <a class="block py-2 px-4 text-sm" href="./contact.php">Contact</a>
      </div>
    </nav>

