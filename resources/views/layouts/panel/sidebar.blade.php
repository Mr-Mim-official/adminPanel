<aside id="sideBar" class="px-2 bg-light-primary d-flex flex-columns gap-2 align-items-center" style="width: 15%">

    <div class="title bold white mt-3">Panel Admin</div>
    <div class="img-profile"><img style="box-shadow: 0 10px 15px rgba(50, 50, 200, 1); filter: brightness(1.1);" width="100px" src="/assets/media/download.jpg" class="border-full" alt="image profile"></div>
    <div class="user-information white mb-15">
        <h4 class="title text-center">{{session("userInfo")->fullName}}<a href="{{route("profile")}}"><i class="edit-icon fa fa-edit on-primary title mx-1"></i></a></h4>
    </div>

    <div class="menu">
        <nav class="sideMenu d-flex flex-columns gap-4 mb-25 w100 p-sticky">
            <ul class="d-flex gap-2 title on-primary">
                <i class="fa fa-user d-inline-block"></i>
                <li class="d-inline-block "><a href="{{route("home")}}" class="on-primary
                            " rel="noopener noreferrer">Dashboard</a> </li>
            </ul>

            <ul class="post-menu d-flex gap-2 title on-primary flex-columns">
                <li class="d-inline-block"> <i class="fa fa-home d-inline-block"></i><a href="{{route("post.index")}}" class="on-primary"> post</a></li>
                <li class="d-inline-block ml-4"><a href="{{route("post.create")}}" class="on-primary" rel="noopener noreferrer">Create post</a></li>
                <li class="d-inline-block ml-4"><a href="{{route("post.index")}}" class="on-primary" rel="noopener noreferrer">manage post</a></li>
                <li class="d-inline-block ml-4"><a href="{{route("categories.index")}}" class="on-primary" rel="noopener noreferrer">category</a></li>
            </ul>

            <ul class="d-flex gap-2 title on-primary">
                <i class="fa fa-gear d-inline-block"></i>
                <li class="d-inline-block"><a class="on-primary" href="{{route("media.index")}}">Media</a></li>
            </ul>

            <ul class="d-flex gap-2 title on-primary">
                <i class="fa fa-power-off d-inline-block"></i>


                <li class="d-inline-block">
                    <form action="{{route("logout")}}" method="post">
                        @csrf
                        <button class="on-primary bold normal">logout</button>
                    </form>
                </li>

            </ul>

        </nav>
    </div>

</aside>
