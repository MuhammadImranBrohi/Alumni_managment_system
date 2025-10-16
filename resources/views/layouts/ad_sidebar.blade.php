<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Sidebar Brand -->
    <div class="sidebar-brand">
        <a href="/alumni_admin/dashboard" class="brand-link">
            <img src="{{ asset('alumni_admin/dist/assets/img/user2-160x160.jpg') }}" alt="Admin Logo"
                class="brand-image rounded-circle opacity-75 shadow" />
            <span class="brand-text fw-light">Admin Panel</span>
        </a>
    </div>

    <!-- Sidebar Wrapper -->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item menu-open">
                    <a href="{{ url('/alumni_admin/index') }}" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Alumni Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-mortarboard-fill"></i>
                        <p>
                            Alumni Management
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/graduated_alumni') }}" class="nav-link">
                                <i class="nav-icon bi bi-mortarboard-fill"></i>
                                <p>Graduated Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/view_edit_alumni') }}" class="nav-link">
                                <i class="nav-icon bi bi-pencil-square"></i>
                                <p>View | Edit Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/add_alumni') }}" class="nav-link">
                                <i class="nav-icon bi bi-person-plus-fill"></i>
                                <p>Add Alumni</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Content Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-calendar-event-fill"></i>
                        <p>
                            Content Management
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/post_news') }}" class="nav-link">
                                <i class="nav-icon bi bi-newspaper"></i>
                                <p>Post News & Announcements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/publish_events') }}" class="nav-link">
                                <i class="nav-icon bi bi-calendar2-event-fill"></i>
                                <p>Publish Events</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Manage Users & Roles -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people-fill"></i>
                        <p>
                            Manage Users & Roles
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/view_admins') }}" class="nav-link">
                                <i class="nav-icon bi bi-person"></i>
                                <p>View Admins</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/assign_roles') }}" class="nav-link">
                                <i class="nav-icon bi bi-person-add"></i>
                                <p>Assign Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/create_roles') }}" class="nav-link">
                                <i class="nav-icon bi bi-person-fill-add"></i>
                                <p>Create Roles</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Career & Networking -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-briefcase-fill"></i>
                        <p>
                            Career & Networking
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/post_jobs') }}" class="nav-link">
                                <i class="nav-icon bi bi-briefcase-fill"></i>
                                <p>Post Jobs | Internships</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Industry Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-building-fill-gear"></i>
                        <p>
                            Industry Management
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/industry_posts') }}" class="nav-link">
                                <i class="nav-icon bi bi-building-check"></i>
                                <p>View Industry Posts</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Analytics -->
                <li class="nav-header">Analytics</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-graph-up-arrow"></i>
                        <p>
                            Reports & Analytics
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/track_participants') }}" class="nav-link">
                                <i class="nav-icon bi bi-person-fill-exclamation"></i>
                                <p>Track Event Participants</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/alumni_admin/view_all_alumni') }}" class="nav-link">
                                <i class="nav-icon bi bi-person-workspace"></i>
                                <p>View All Alumni</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Docs -->
                <li class="nav-header">DOCUMENTATION</li>
                <li class="nav-item">
                    <a href="{{ url('/alumni_admin/installation_guide') }}" class="nav-link">
                        <i class="nav-icon bi bi-download"></i>
                        <p>Installation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/alumni_admin/faq') }}" class="nav-link">
                        <i class="nav-icon bi bi-question-circle-fill"></i>
                        <p>FAQ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/alumni_admin/license') }}" class="nav-link">
                        <i class="nav-icon bi bi-patch-check-fill"></i>
                        <p>License</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
