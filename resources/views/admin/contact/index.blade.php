@include('layouts.adminHeader')


<div class="container">
    @include('inc.admin.sidebar')
    <div class="main">
        <div class="main-top">
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h2>{{__('index.Contects')}}</h2>
        </div>
        <div class="form-block">


            <div>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">{{__('index.title')}}</li>
                    <li class="list-group-item">{{__('index.text')}}</li>
                    <li class="list-group-item">{{__('index.text_down')}}</li>
                    <li class="list-group-item">{{__('index.img')}}</li>
                </ul>

                <div class="adminPosts">
                    @if(isset($contact))
                        <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.contact.show',$contact->id) }}">{{__('index.Edit post')}}</a>
                        <ul class="list-group list-group-horizontal-sm">

                            <li class="list-group-item big-li">{{  $contact->tel }}</li>
                            <li class="list-group-item big-li">{{  $contact->email}}</li>
                            <li class="list-group-item big-li">{{  $contact->address}}</li>
                            <li class="list-group-item big-li">{{  $contact->city}}</li>
                            <li class="list-group-item big-li">{{  $contact->street}}</li>
                            <li class="list-group-item big-li">{{  $contact->number}}</li>
                        </ul>
                    @else
                        <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.contact.creat') }}">{{__('index.Add post')}}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.adminFooter')


