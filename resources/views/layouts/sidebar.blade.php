<aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
          <div class="flex flex-col h-full">
            <!-- Sidebar links -->
            <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
              <!-- Dashboards links -->
              <div x-data="{ isActive: true, open: true}" class="hover:bg-green-100 active:bg-green-100">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <div
                  class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" >
                  <i class="bi bi-house"></i>
                  <a href="/admin" class="ml-2 text-sm"> Dashboards </a>
                </div>
              </div>

              <!-- Components links -->
              <div x-data="{ isActive: false, open: false }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a
                  href="#"
                  @click="$event.preventDefault(); open = !open"
                  class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                  :class="{ 'bg-primary': isActive || open }"
                  role="button"
                  aria-haspopup="true"
                  :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                <i class="bi bi-ui-checks-grid"></i>
                  <span class="ml-2 text-sm">SPK</span>
                  <span aria-hidden="true" class="ml-auto">
                    <!-- active class 'rotate-180' -->
                    <svg
                      class="w-4 h-4 transition-transform transform"
                      :class="{ 'rotate-180': open }"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                  <a
                    href="/kriteria"
                    role="menuitem"
                    class="block p-2 hover:bg-primary text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                  >
                    Data Kriteria
                  </a>
                  <a
                    href="/alternative"
                    role="menuitem"
                    class="block p-2 hover:bg-primary text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                  >
                    Data Alternative
                  </a>
                  <a
                    href="/subkriteria"
                    role="menuitem"
                    class="block p-2 hover:bg-primary text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                  >
                    Sub Kriteria
                  </a>
                  <a
                    href="/hitung"
                    role="menuitem"
                    class="block p-2 hover:bg-primary text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                  >
                    Perhitungan
                  </a>
                </div>
              </div>
              <div x-data="{ isActive: true, open: true}" class="">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <div
                  class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" >
                  <i class="bi bi-person-gear"></i>
                  <a href="/profile" class="ml-2 text-sm"> Profile </a>
                </div>
              </div>
              <div x-data="{ isActive: true, open: true }" class="hover:bg-primary active:bg-green-100">
                <div x-show="isActive && open" class="bg-white hover:bg-primary shadow-md rounded-md mt-2 py-1 w-full">
                   <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <x-dropdown-link class="hover:bg-primary" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="bi bi-box-arrow-left "></i>
                    {{ __('Log Out') }}
                </x-dropdown-link>
        </form>
    </div>
</div>

            </nav>

            <!-- Sidebar footer -->
            <div class="flex-shrink-0 px-2 py-4 space-y-2">
              <button
                @click="openSettingsPanel"
                type="button"
                class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark"
              >
                <span aria-hidden="true">
                  <svg
                    class="w-4 h-4 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                    />
                  </svg>
                </span>
                <span>Customize</span>
              </button>
              <footer class="items-center justify-between p-4 bg-white border-t dark:bg-darker dark:border-primary-darker">
                <div>SupplirSeeker &copy; 2024</div>
                <div>Made by
                    <a href="https://github.com/Bais26" target="_blank" class="text-blue-500 hover:underline">Baskara</a>
                </div>
             </footer>
            </div>
          </div>
        </aside>    