<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{asset('admin_dashboard_assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">MYBLOG</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('admin.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Posts</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('admin.posts.index') }}"><i class="bx bx-right-arrow-alt"></i>Todos os Posts</a>
                        </li>
                        <li> <a href="{{ route('admin.posts.create') }}"><i class="bx bx-right-arrow-alt"></i>Adicionar Novo Post</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-menu'></i></div>
                        <div class="menu-title">Categories</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('admin.categories.index') }}"><i class="bx bx-right-arrow-alt"></i>Todas Categorias</a></li>
                        <li> <a href="{{ route('admin.categories.create') }}"><i class="bx bx-right-arrow-alt"></i>Adicionar Nova Categoria</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.tags.index') }}">
                    <div class="parent-icon"><i class='bx bx-purchase-tag'></i></div>
                        <div class="menu-title">Tags</div>
                    </a>
                </li>

                <li>
                   <a href="javascript:;" class="has-arrow">
                       <div class="parent-icon"><i class='bx bx-comment-dots'></i>
                       </div>
                       <div class="menu-title">Comments</div>
                   </a>

                   <ul>
                       <li> <a href="{{ route('admin.comments.index') }}"><i class="bx bx-right-arrow-alt"></i>Todos Cometários</a>
                       </li>
                       <li> <a href="{{ route('admin.comments.create') }}"><i class="bx bx-right-arrow-alt"></i>Adicionar Novos Comentários</a>
                       </li>
                       <hr>
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class='bx bx-key'></i></div>
                               <div class="menu-title">Roles</div>
                           </a>
                           <ul>
                               <li> <a href="{{ route('admin.roles.index') }}"><i class="bx bx-right-arrow-alt"></i>Todas as Regras</a></li>
                               <li> <a href="{{ route('admin.roles.create') }}"><i class="bx bx-right-arrow-alt"></i>Adicionar Novas Regras</a></li>
                           </ul>
                       </li>
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class='bx bx-user'></i>
                               </div>
                               <div class="menu-title">Usuários</div>
                           </a>

                           <ul>
                               <li> <a href="{{ route('admin.users.index') }}"><i class="bx bx-right-arrow-alt"></i>Todos Usuários</a>
                               </li>
                               <li> <a href="{{ route('admin.users.create') }}"><i class="bx bx-right-arrow-alt"></i>Adicionar Novos Usuários</a>
                               </li>

                           </ul>
                       </li>

                       <li>
                           <a href="{{ route('admin.contacts') }}">
                           <div class="parent-icon"><i class='bx bx-mail-send'></i></div>
                               <div class="menu-title">Contacts</div>
                           </a>
                       </li>

                   </ul>
               </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
