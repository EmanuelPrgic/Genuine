<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @media screen and (min-width:1024px){ .header_area_container{
            background:purple;
        }
            .nav-image {
                max-width: 10px;
                max-height: 10px;
            }
        }

            .wgl-header-row_wrapper{
                background:white;
            }

            .menu-item-1782{
                background:#35a07b;
                margin-left: 250px;
                border-left: 1px solid white;
                height: 500px;
            }

            .menu-item-1810{
                background:#35a07b;
                border-left: 1px solid white;
                height: 500px;
            }

            .menu-item-1784{
                background:#35a07b;
                border-left: 1px solid white;
                height: 500px;
            }

            .menu-item-1805{
                background:#35a07b;
                border-left: 1px solid white;
                height: 500px;
            }

            .menu-item-1832{
                background:#35a07b;
                border-left: 1px solid white;
                height: 500px;
            }

            .menu-item-1826{
                background:#35a07b;
                border-left: 1px solid white;
                height: 500px;
            }

            .side_panel .side_panel_inner .side_panel-toggle{
                color:black;
                margin-top:400px;

            }

            #menu-main-1{
                margin-left:140px
            }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/profiles/{{Auth::user()->id}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/profiles/{{Auth::user()->id}}">My Profile<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/profiles/">Browse Profiles<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div>
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Account Settings') }}
            </x-dropdown-link>
            <form method="POST" action="{{ route('logout') }} ">
                @csrf
                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
