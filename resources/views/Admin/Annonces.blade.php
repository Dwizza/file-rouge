@extends('layouts.app')
@section('dashboard.admin')

<div class="flex flex-wrap ">
  <div class="flex-none w-full max-w-full px-3">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
      <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
        <h6 class="dark:text-white">Annonces</h6>
      </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-0 overflow-x-auto">
          <table class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
            <thead class="align-bottom">
              <tr>
                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Budget</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Completion</th>
                <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap"></th>
              </tr>
            </thead>
            <tbody class="border-t">
              <tr>
                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <div class="flex px-2">
                    <div>
                      <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="spotify" />
                    </div>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify</h6>
                    </div>
                  </div>
                </td>
                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,500</p>
                </td>
                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                </td>
                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <div class="flex items-center justify-center">
                    <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">60%</span>
                    <div>
                      <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                        <div class="flex flex-col justify-center w-3/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                    <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection