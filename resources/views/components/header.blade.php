@props(['title' => $metaTitle, 'buttonLink' => '', 'buttonTitle' => 'Create'])

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title" >
                    {{$title}}
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    @if($buttonTitle == 'Save')
                        <a href="" class="btn btn-primary d-none d-sm-inline-block" onclick="event.preventDefault();
                         document.getElementById('form').submit();">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <i class="ti ti-device-floppy"></i>
                            {{$buttonTitle}}
                        </a>
                        <a href="{{$buttonLink}}" class="btn btn-primary d-sm-none btn-icon" onclick="event.preventDefault();
                         document.getElementById('form').submit();">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <i class="ti ti-device-floppy"></i>
                        </a>
                    @else
                        <a href="{{$buttonLink}}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            @if($buttonTitle == 'Create')
                                <i class="ti ti-plus"></i>
                            @endif
                            {{$buttonTitle}}
                        </a>
                        <a href="{{$buttonLink}}" class="btn btn-primary d-sm-none btn-icon" >
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <i class="ti ti-disc"></i>
                        </a>
                    @endif

                </div>
            </div>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Save Form
        // document.addEventListener('keydown', function() {
        //     if(event.keyCode == 17) isCtrl=true;
        //     if(event.keyCode == 98 && isCtrl == true) return true
        //     document.getElementById('form').submit();
        //     event.preventDefault();
        //     return false;
        // });

    });

</script>
