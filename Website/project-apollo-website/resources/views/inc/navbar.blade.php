<nav class="flex justify-center px-4 text-gray-800 bg-transparent">
      <div class="container py-2">

        <hr class="h-px mt-3 border-gray-300 border-none dark:bg-gray-700">
        <div class="flex flex-col items-center justify-between mt-3 md:flex-row">
        <!--Logo-->

        <div>
          <a href="/"><img loading=lazy class="my-nav-logo" src="./storage/images/main/Apollo_logo.png" alt="Logo" /></a>
        </div>

        <!--Navbar items-->
        <div class="flex mt-6 flex-col-1 md:mt-8 md:m-0">
          <div class="p-2 mx-2 space-x-6 uppercase bg-gray-900 border border-opacity-25 rounded-lg shadow md:space-x-8 xl:ml-10 xl:p-6 sm:p-4 bg-opacity-20 grow">

            <!--Always show -->
            <a href=" #home" class="my-nav-items"><i> Home </i>
            <!--Hide on sm show from md screen  -->

            <a href="https://worldofapollo.com/dynmap" class="hidden sm:inline-flex my-nav-items"> Dynmap </a>
            <a href="https://worldofapollo.com/discord" class="hidden sm:inline-flex my-nav-items"> Discord </a>

            <!--Hide on md show from lg screen  -->

            <a href="https://worldofapollo.com/apply" class="hidden lg:inline-flex my-nav-items"> Apply </a>
            <a href="./wiki" class="hidden lg:inline-flex my-nav-items"> Wiki </a>

            <a href="https://worldofapollo.enjin.com/serverstats" class="hidden lg:inline-flex my-nav-items"> Stats </a>

          <div class="inline-flex my-0 my-nav-items dropdown dropdown-end" tabindex="0">
            <div tabindex="0">

            <!-- Dropdown menu will show items from navbar on all screen size -->
            <p> Menu </i>
          </div>
          <ul tabindex="0" class="text-white bg-gray-900 rounded-lg shadow hover-text-blue-300 menu dropdown-content">
            <li>
              <a href="https://worldofapollo.com/dynmap"> Dynmap </a>
            </li>
            <li>
              <a href="https://worldofapollo.com/discord"> Discord </a>
            </li>
            <li>
              <a href="https://worldofapollo.com/apply"> Apply </a>
            </li>
            <li>
              <a href="/wiki"> Wiki </a>
            </li>

            <li>
              <a href="/blog"> Blog </a>
            </li>

            <li>
              <a href="https://worldofapollo.enjin.com/serverstats"> Stats </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</nav>
