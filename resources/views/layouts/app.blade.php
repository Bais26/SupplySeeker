<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>K-WD Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet" />
  <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  @vite(['resources/js/app.js'])
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>

<body>
  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
      <!-- Loading screen -->
      <div x-ref="loading"
        class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
        Loading.....
      </div>

      <!-- Sidebar -->
      @include('layouts.sidebar')

      <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
        @include('layouts.header')
        <!--   -->
        <!-- Main content -->
        <main>
          {{ $slot }}
        </main>
      </div>
      <!-- Backdrop -->
      <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isNotificationsPanelOpen"
        @click="isNotificationsPanelOpen = false" class="fixed inset-0 z-10 bg-primary-darker" style="opacity: 0.5"
        aria-hidden="true"></div>
      <!-- Panel -->
      <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-ref="notificationsPanel"
        x-show="isNotificationsPanelOpen" @keydown.escape="isNotificationsPanelOpen = false" tabindex="-1"
        aria-labelledby="notificationPanelLabel"
        class="fixed inset-y-0 z-20 w-full max-w-xs bg-violet-500 dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
        <div class="absolute right-0 p-2 transform translate-x-full">
          <!-- Close button -->
          <button @click="isNotificationsPanelOpen = false"
            class="p-2 text-white rounded-md focus:outline-none focus:ring">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Backdrop -->

        <!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
        <script>
          const setup = () => {
            const getTheme = () => {
              if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'))
              }

              return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
              window.localStorage.setItem('dark', value)
            }

            const getColor = () => {
              if (window.localStorage.getItem('color')) {
                return window.localStorage.getItem('color')
              }
              return 'cyan'
            }

            const setColors = (color) => {
              const root = document.documentElement
              root.style.setProperty('--color-primary', `var(--color-${color})`)
              root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
              root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
              root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
              root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
              root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
              root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
              this.selectedColor = color
              window.localStorage.setItem('color', color)
              //
            }

            const updateBarChart = (on) => {
              const data = {
                data: randomData(),
                backgroundColor: 'rgb(207, 250, 254)',
              }
              if (on) {
                barChart.data.datasets.push(data)
                barChart.update()
              } else {
                barChart.data.datasets.splice(1)
                barChart.update()
              }
            }

            const updateDoughnutChart = (on) => {
              const data = random()
              const color = 'rgb(207, 250, 254)'
              if (on) {
                doughnutChart.data.labels.unshift('Seb')
                doughnutChart.data.datasets[0].data.unshift(data)
                doughnutChart.data.datasets[0].backgroundColor.unshift(color)
                doughnutChart.update()
              } else {
                doughnutChart.data.labels.splice(0, 1)
                doughnutChart.data.datasets[0].data.splice(0, 1)
                doughnutChart.data.datasets[0].backgroundColor.splice(0, 1)
                doughnutChart.update()
              }
            }

            const updateLineChart = () => {
              lineChart.data.datasets[0].data.reverse()
              lineChart.update()
            }

            return {
              loading: true,
              isDark: getTheme(),
              toggleTheme() {
                this.isDark = !this.isDark
                setTheme(this.isDark)
              },
              setLightTheme() {
                this.isDark = false
                setTheme(this.isDark)
              },
              setDarkTheme() {
                this.isDark = true
                setTheme(this.isDark)
              },
              color: getColor(),
              selectedColor: 'cyan',
              setColors,
              toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
              },
              isSettingsPanelOpen: false,
              openSettingsPanel() {
                this.isSettingsPanelOpen = true
                this.$nextTick(() => {
                  this.$refs.settingsPanel.focus()
                })
              },
              isNotificationsPanelOpen: false,
              openNotificationsPanel() {
                this.isNotificationsPanelOpen = true
                this.$nextTick(() => {
                  this.$refs.notificationsPanel.focus()
                })
              },
              isSearchPanelOpen: false,
              openSearchPanel() {
                this.isSearchPanelOpen = true
                this.$nextTick(() => {
                  this.$refs.searchInput.focus()
                })
              },
              isMobileSubMenuOpen: false,
              openMobileSubMenu() {
                this.isMobileSubMenuOpen = true
                this.$nextTick(() => {
                  this.$refs.mobileSubMenu.focus()
                })
              },
              isMobileMainMenuOpen: false,
              openMobileMainMenu() {
                this.isMobileMainMenuOpen = true
                this.$nextTick(() => {
                  this.$refs.mobileMainMenu.focus()
                })
              },
              updateBarChart,
              updateDoughnutChart,
              updateLineChart,
            }
          }
        </script>
</body>

</html>