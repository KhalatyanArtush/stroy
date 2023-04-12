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


            <div class="list-group">
                <div class="admin-list-group">
                    @if(isset($contact))
                    <div class="admin-result">
                        <p>{{__('index.Tel')}}</p>  <p>{{  $contact->tel }}</p>

                    </div>
                    <div class="admin-result">
                        <p>{{__('index.email')}}</p>  <p>{{  $contact->email }}</p>

                    </div>
                    <div class="admin-result">
                        <p>{{__('index.time')}}</p>   <p>{{  $contact->time }}</p>

                    </div>
                    <div class="admin-result">
                        <p>{{__('index.address')}}</p>   <p>{{  $contact->address }}</p>

                    </div>
                    <div class="admin-result">
                        <p>{{__('index.city')}}</p>   <p>{{  $contact->city }}</p>

                    </div>
                    <div class="admin-result">
                        <p>{{__('index.street')}}</p>   <p>{{  $contact->street }}</p>

                    </div>
                    <div class="admin-result">
                        <p>{{__('index.number')}}</p>   <p>{{  $contact->number }}</p>

                    </div>

                        <div class="button-container">
                            <button class="btn"><a data-v-767ef7eb="" tabindex="0"
                                                   href="{{ route('admin.contact.show',$contact->id) }}">{{__('index.Edit post')}}</a>
                            </button>
                        </div>
                    @else
                        <div class="button-container">
                            <button class="btn"><a data-v-767ef7eb="" tabindex="0"
                                                   href="{{ route('admin.contact.creat') }}">{{__('index.Add post')}}</a>
                            </button>
                        </div>
                    @endif

                </div>
        </div>
    </div>
</div>

@include('layouts.adminFooter')


