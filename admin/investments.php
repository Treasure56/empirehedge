<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
      integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css ">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              dark: {
                DEFAULT: "#101010",
                text: "#121212",
              },
              light: {
                DEFAULT: "#fefefe",
                text: "#fefedd",
              },
              primary: {
                DEFAULT: "#1861C8",
                dark: "#390095",
              },
              secondary: {
                DEFAULT: "#1EE0AC",
              },
            },
          },
        },
      };
    </script>
    <title>Document</title>
  </head>
  <body>
    <main>
      <div class="flex w-full">
        <div
          class="flex max-md:w-screen h-screen fixed top-0 left-[-110%] md:left-0 transition-md duration-300"
          id="sideMenu"
        >
          <div
            class="flex flex-col flex-shrink-0 w-72 pt-5 h-full fixed p-4 bg-white border-r border-gray-200 overflow-y-auto"
          >
            <div
              class="flex justify-between items-center sticky top-0 left-0 bg-white"
            >
              <img src="./img/logo.jpeg" alt="" class="w-24" />
              <button class="md:hidden text-3xl" onclick="toggleSideMenu()">
                <i class="bi bi-x"></i>
              </button>
            </div>
            <div class="text-gray-600 flex flex-col gap-1 text-2xl">
              <p class="text-sm">MENU</p>
              <div
              class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
            >
            <i class="fa-solid fa-user"></i>
              <a href="dashboard.php" class="text-sm">Users</a>
            </div>
            <div
            class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
          >
          <i class="fa-solid fa-money-bill-transfer"></i>
            <a href="deposit.php" class="text-sm">Deposits</a>
          </div>
          <div class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100">
              <i class="fa-solid fa-sack-dollar"></i>
              <a href="investments.php" class="text-sm">Investment</a>
            </div>
              <div
                class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
              >
                <a href="index.php" class="text-sm">Go to main website</a>
              </div>
            </div>
          </div>
          <div
            class="bg-[#00000055] w-full md:hidden h-full"
            onclick="toggleSideMenu()"
          ></div>
        </div>
        <div class="w-72 flex-shrink-0 max-md:hidden"></div>
        <div class="w-full flex flex-col h-50">
          <div
            class="flex gap-4 h-16 items-center px-4 border-b border-gray-200 justify-between"
          >
            <button class="md:hidden" onclick="toggleSideMenu()">
              <i class="bi bi-list"></i>
            </button>
            <div class="flex gap-1 text-sm p-2 w-full max-md:hidden">
             
            </div>
          </div>

          <div class="flex flex-col py-2 p-4 md:p-8 gap-5">
            <div class="flex justify-between max-md:flex-col">
              <h1 class="text-2xl font-semibold">Investment</h1>
              <div class="relative">
                <input
                  type="text"
                  class="border bg-gray-100 p-1 px-4 rounded max-md:w-full"
                  placeholder="Search users..."
                />
                <button
                  class="bi bi-search absolute right-4 top-1/2 -translate-y-1/2"
                ></button>
              </div>
            </div>

            <div class="overflow-x-auto w-full">
              <table class="table-auto w-full border border-gray">
                <tr class="p-4 py-4 font-semibold p-4">
                  <td>Username</td>
                  <td>Email</td>
                  <td>Forex</td>
                  <td>Bitcoin</td>
                  <td>Stock</td>
                  <td>B&S</td>
                  <td>Ethereum</td>
                  <td>Action</td>
                </tr>

                <tr class="border border-gray p-4">
                  <td class="">Username</td>
                  <td class="">example@gmail.com</td>
                  <td>#5000</td>
                  <td>#6000</td>
                  <td>#6500</td>
                  <td>#7500</td>
                  <td>#4000</td>
                  <td>
                    <button class="bg-primary px-4 rounded text-white">
                      Edit
                    </button>
                  </td>
                </tr>
                <tr class="border border-gray p-4">
                  <td class="">Username</td>
                  <td class="">example@gmail.com</td>
                  <td>#5000</td>
                  <td>#6000</td>
                  <td>#6500</td>
                  <td>#7500</td>
                  <td>#4000</td>
                  <td>
                    <button class="bg-primary px-4 rounded text-white">
                      Edit
                    </button>
                  </td>
                </tr>
                <tr class="border border-gray p-4">
                  <td class="">Username</td>
                  <td class="">example@gmail.com</td>
                  <td>#5000</td>
                  <td>#6000</td>
                  <td>#6500</td>
                  <td>#7500</td>
                  <td>#4000</td>
                  <td>
                    <button class="bg-primary px-4 rounded text-white">
                      Edit
                    </button>
                  </td>
                </tr>
                <tr class="border border-gray p-4">
                  <td class="">Username</td>
                  <td class="">example@gmail.com</td>
                  <td>#5000</td>
                  <td>#6000</td>
                  <td>#6500</td>
                  <td>#7500</td>
                  <td>#4000</td>
                  <td>
                    <button class="bg-primary px-4 rounded text-white">
                      Edit
                    </button>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script>
    function toggleSideMenu() {
      const menu = document.getElementById("sideMenu");
      menu.classList.toggle("[left:0_!important]");
    }
  </script>
</html>
