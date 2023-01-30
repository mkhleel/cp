<x-app-layout>

    <x-slot name="header">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    {{__("Admin")}}
                </div>
                <h2 class="page-title">
                    {{__("Skill")}}
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        Create new report
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    </a>
                </div>
            </div>
        </div>

    </x-slot>

    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <div id="table-default" class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><button class="table-sort" data-sort="sort-name">Name</button></th>
                            <th><button class="table-sort" data-sort="sort-city">City</button></th>
                            <th><button class="table-sort" data-sort="sort-type">Type</button></th>
                            <th><button class="table-sort" data-sort="sort-score">Score</button></th>
                            <th><button class="table-sort" data-sort="sort-date">Date</button></th>
                            <th><button class="table-sort" data-sort="sort-quantity">Quantity</button></th>
                            <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
                        </tr>
                        </thead>
                        <tbody class="table-tbody">
                        <tr>
                            <td class="sort-name">Steel Vengeance</td>
                            <td class="sort-city">Cedar Point, United States</td>
                            <td class="sort-type">RMC Hybrid</td>
                            <td class="sort-score">100,0%</td>
                            <td class="sort-date" data-date="1628071164">August 04, 2021</td>
                            <td class="sort-quantity">74</td>
                            <td class="sort-progress" data-progress="30">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-auto">30%</div>
                                    <div class="col">
                                        <div class="progress" style="width: 5rem">
                                            <div class="progress-bar" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" aria-label="30% Complete">
                                                <span class="visually-hidden">30% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
