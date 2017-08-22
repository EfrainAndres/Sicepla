<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="javascript:;">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        @for($i = 0; $i <= count(Request::segments()); $i++)
            <li>
                <a href="">{{ ucfirst( Request::segment($i) ) }}</a>
                @if($i < count(Request::segments()) & $i > 0)
                    <i class="fa fa-angle-right"></i>
                @endif
            </li>
        @endfor
    </ul>
</div>