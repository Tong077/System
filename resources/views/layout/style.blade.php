<style>
    /* ============================================================
       CBVH Global Stylesheet
       Compatible with AdminLTE + Bootstrap 4 + Laravel Blade
       Usage: @include('layout.css')
       or <link rel="stylesheet" href="/css/cbvh.css">============================================================*/

    /* ── Reset & Base ─────────────────────────────────────────── */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body.hold-transition {
        background: #f8f9fa;
        font-family: 'Google Sans', 'Segoe UI', system-ui, -apple-system, sans-serif;
        font-size: 14px;
        color: #333;
    }

    /* ── Typography ───────────────────────────────────────────── */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 500;
        color: #111;
    }

    p {
        margin-bottom: 0;
    }

    a {
        color: #1d9e75;
        text-decoration: none;
    }

    a:hover {
        color: #0f6e56;
        text-decoration: none;
    }

    /* ── Content Wrapper ──────────────────────────────────────── */
    .content-wrapper {
        background: #f8f9fa !important;
        overflow-y: auto;
        max-height: calc(100vh - 60px);
        padding: 24px !important;
    }

    /* ── Navbar ───────────────────────────────────────────────── */
    .main-header.navbar {
        background: #ffffff !important;
        border-bottom: 1px solid #eaeaea !important;
        box-shadow: none !important;
        min-height: 54px;
        padding: 0 1.25rem;
    }

    .main-header .nav-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 8px;
        color: #666 !important;
        font-size: 14px;
        padding: 0;
        transition: background 0.15s;
    }

    .main-header .nav-link:hover {
        background: #f3f3f3;
    }

    .main-header .nav-link.text-link {
        width: auto;
        padding: 5px 10px;
        font-size: 13px;
    }

    .main-header .navbar-badge {
        font-size: 9px;
        padding: 2px 5px;
    }

    /* Navbar icon buttons */
    .navbar-icon-btn {
        width: 34px;
        height: 34px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        background: #fff;
        color: #666;
        cursor: pointer;
        font-size: 14px;
        position: relative;
        transition: background 0.15s;
    }

    .navbar-icon-btn:hover {
        background: #f8f8f8;
    }

    /* Navbar user pill */
    /* ── User menu (AdminLTE native pattern) ──────────────────── */
    .user-menu>.nav-link {
        display: flex !important;
        align-items: center;
        gap: 8px;
        padding: 4px 10px !important;
        border-radius: 8px;
        width: auto !important;
        height: auto !important;
    }

    .user-menu>.nav-link .user-name {
        font-size: 13px;
        font-weight: 500;
        color: #111;
    }

    .user-menu>.nav-link::after {
        font-size: 10px;
        color: #bbb;
        margin-left: 2px;
    }

    /* Dropdown panel */
    .user-dropdown-menu {
        min-width: 240px;
        padding: 0;
        border: 1px solid #eaeaea !important;
        border-radius: 12px !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.09) !important;
        margin-top: 6px;
        overflow: hidden;
    }

    /* User header */
    .user-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        padding: 20px 16px 16px;
        background: #f8f9fa;
        border-bottom: 1px solid #f0f0f0;
        text-align: center;
    }

    .user-header p {
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        color: #111;
        line-height: 1.4;
    }

    .user-header p small {
        display: block;
        font-size: 12px;
        color: #aaa;
        font-weight: 400;
        margin-top: 2px;
    }

    /* User body */
    .user-body {
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .user-body .row {
        margin: 0;
    }

    .user-body .col-4 {
        padding: 6px 0;
        border-right: 1px solid #f0f0f0;
    }

    .user-body .col-4:last-child {
        border-right: none;
    }

    .user-body a {
        font-size: 12px;
        color: #666;
        display: block;
        text-align: center;
        transition: color 0.12s;
    }

    .user-body a:hover {
        color: #1d9e75;
    }

    /* User footer */
    .user-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
        background: #fff;
    }

    /* Navbar search bar */
    .navbar-search-bar {
        display: flex;
        align-items: center;
        background: #f6f6f6;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        padding: 0 10px;
        gap: 6px;
        height: 34px;
        min-width: 180px;
    }

    .navbar-search-bar input {
        border: none;
        background: none;
        outline: none;
        font-size: 13px;
        color: #333;
        width: 100%;
    }

    .navbar-search-bar input::placeholder {
        color: #bbb;
    }

    .navbar-search-bar i {
        color: #aaa;
        font-size: 12px;
    }

    /* Dropdown menus */
    .main-header .dropdown-menu {
        border: 1px solid #eaeaea !important;
        border-radius: 10px !important;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08) !important;
        padding: 4px 0;
    }

    .main-header .dropdown-item {
        font-size: 13px;
        padding: 8px 16px;
        color: #444;
    }

    .main-header .dropdown-item:hover {
        background: #f8f8f8;
        color: #111;
    }

    .main-header .dropdown-divider {
        border-color: #f0f0f0;
    }

    .main-header .dropdown-footer {
        font-size: 12px;
        color: #1d9e75;
        text-align: center;
    }

    /* ── Sidebar ──────────────────────────────────────────────── */
    .main-sidebar {
        background: #ffffff !important;
        border-right: 1px solid #eaeaea !important;
        box-shadow: none !important;
    }

    .brand-link {
        display: flex !important;
        align-items: center;
        gap: 10px;
        padding: 14px 18px !important;
        border-bottom: 1px solid #eaeaea !important;
        background: #fff !important;
    }

    .brand-link .brand-logo-wrap {
        width: 34px;
        height: 34px;
        background: #1d9e75;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .brand-link .brand-logo-wrap img {
        width: 20px;
        height: 20px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .brand-link .brand-text {
        font-size: 15px;
        font-weight: 600;
        color: #111;
        letter-spacing: 0.04em;
    }

    .brand-link .brand-text span {
        color: #1d9e75;
    }

    /* Sidebar section labels */
    .sidebar-section-label {
        padding: 8px 10px 2px;
        font-size: 10px;
        font-weight: 600;
        color: #bbb;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin: 0;
    }

    /* Nav items */
    .nav-sidebar .nav-item {
        margin-bottom: 1px;
        margin-top: 1px;
    }

    .nav-sidebar>.nav-item>.nav-link {
        display: flex !important;
        align-items: center;
        gap: 10px;
        padding: 9px 12px !important;
        border-radius: 8px;
        color: #555 !important;
        font-size: 13px;
        font-weight: 400;
        transition: background 0.15s, color 0.15s;
        margin: 0 !important;
    }

    .nav-sidebar>.nav-item>.nav-link:hover {
        background: #f3f3f3 !important;
        color: #111 !important;
    }

    .nav-sidebar>.nav-item>.nav-link.active {
        background: #e1f5ee !important;
        color: #0f6e56 !important;
        font-weight: 500;
    }

    /* Nav icon wrap */
    .nav-icon-box {
        width: 28px;
        height: 28px;
        border-radius: 7px;
        background: #f3f3f3;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background 0.15s;
    }

    .nav-link:hover .nav-icon-box {
        background: #e8e8e8;
    }

    .nav-link.active .nav-icon-box {
        background: #1d9e75;
    }

    .nav-icon-box i {
        font-size: 12px;
        color: #888;
    }

    .nav-link.active .nav-icon-box i {
        color: #fff;
    }

    /* Treeview submenu */
    .nav-treeview {
        margin: 2px 0 2px 16px !important;
        border-left: 1.5px solid #eaeaea;
        padding-left: 8px !important;
    }

    .nav-treeview .nav-item {
        margin-bottom: 1px;
    }

    .nav-treeview .nav-link {
        display: flex !important;
        align-items: center;
        gap: 8px;
        padding: 7px 10px !important;
        border-radius: 6px;
        color: #777 !important;
        font-size: 12px;
        transition: background 0.15s, color 0.15s;
    }

    .nav-treeview .nav-link:hover {
        background: #f5f5f5 !important;
        color: #111 !important;
    }

    .nav-treeview .nav-link.active {
        background: #e1f5ee !important;
        color: #0f6e56 !important;
    }

    /* Submenu dot */
    .nav-sub-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #ddd;
        flex-shrink: 0;
    }

    .nav-treeview .nav-link.active .nav-sub-dot {
        background: #1d9e75;
    }

    /* Sidebar user footer */
    .sidebar-user-footer {
        padding: 12px 16px;
        border-top: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-user-footer .user-name {
        font-size: 13px;
        font-weight: 500;
        color: #111;
        margin: 0;
        line-height: 1.3;
    }

    .sidebar-user-footer .user-role {
        font-size: 11px;
        color: #aaa;
        margin: 0;
    }

    /* ── Avatar ───────────────────────────────────────────────── */
    .cbvh-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #e1f5ee;
        color: #0f6e56;
        font-size: 11px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1.5px solid #c5ead9;
        flex-shrink: 0;
    }

    .cbvh-avatar.avatar-sm {
        width: 26px;
        height: 26px;
        font-size: 10px;
    }

    .cbvh-avatar.avatar-lg {
        width: 40px;
        height: 40px;
        font-size: 14px;
    }

    .cbvh-avatar.avatar-blue {
        background: #e6f1fb;
        color: #0c447c;
        border-color: #b5d4f4;
    }

    .cbvh-avatar.avatar-amber {
        background: #faeeda;
        color: #633806;
        border-color: #fac775;
    }

    .cbvh-avatar.avatar-pink {
        background: #fbeaf0;
        color: #72243e;
        border-color: #f4c0d1;
    }

    .cbvh-avatar.avatar-gray {
        background: #f1efe8;
        color: #444441;
        border-color: #d3d1c7;
    }

    .cbvh-avatar.avatar-red {
        background: #fcebeb;
        color: #791f1f;
        border-color: #f7c1c1;
    }

    /* ── Cards ────────────────────────────────────────────────── */
    .card {
        border: 1px solid #eaeaea !important;
        border-radius: 12px !important;
        box-shadow: none !important;
        background: #fff;
    }

    .card-header {
        background: #ffffff !important;
        border-bottom: 1px solid #f0f0f0 !important;
        border-radius: 12px 12px 0 0 !important;
        padding: 16px 20px !important;
    }

    .card-title {
        font-size: 15px !important;
        font-weight: 500 !important;
        color: #111 !important;
        margin: 0 !important;
    }

    .card-subtitle {
        font-size: 12px;
        color: #aaa;
        margin-top: 2px;
    }

    .card-body {
        padding: 0 !important;
    }

    .card-body.padded {
        padding: 20px !important;
    }

    .card-footer {
        background: #fff !important;
        border-top: 1px solid #f0f0f0 !important;
        border-radius: 0 0 12px 12px !important;
        padding: 12px 20px !important;
    }

    /* ── Buttons ──────────────────────────────────────────────── */
    .btn {
        border-radius: 8px !important;
        font-size: 13px !important;
        font-weight: 500 !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        transition: all 0.15s;
    }

    .btn i {
        font-size: 11px;
    }

    .btn-primary {
        background: #1d9e75 !important;
        border-color: #1d9e75 !important;
        color: #fff !important;
    }

    .btn-primary:hover {
        background: #0f6e56 !important;
        border-color: #0f6e56 !important;
    }

    .btn-success {
        background: #1d9e75 !important;
        border-color: #1d9e75 !important;
        color: #fff !important;
    }

    .btn-success:hover {
        background: #0f6e56 !important;
        border-color: #0f6e56 !important;
    }

    .btn-danger {
        background: #fcebeb !important;
        border-color: #f7c1c1 !important;
        color: #791f1f !important;
    }

    .btn-danger:hover {
        background: #f7c1c1 !important;
    }

    .btn-warning {
        background: #faeeda !important;
        border-color: #fac775 !important;
        color: #633806 !important;
    }

    .btn-warning:hover {
        background: #fac775 !important;
    }

    .btn-info {
        background: #e6f1fb !important;
        border-color: #b5d4f4 !important;
        color: #0c447c !important;
    }

    .btn-info:hover {
        background: #b5d4f4 !important;
    }

    .btn-secondary {
        background: #f3f3f3 !important;
        border-color: #e0e0e0 !important;
        color: #555 !important;
    }

    .btn-secondary:hover {
        background: #e8e8e8 !important;
    }

    .btn-outline-primary {
        border: 1px solid #eaeaea !important;
        background: #fff !important;
        color: #555 !important;
    }

    .btn-outline-primary:hover {
        background: #f8f8f8 !important;
    }

    .btn-sm {
        padding: 6px 12px !important;
        font-size: 12px !important;
    }

    .btn-lg {
        padding: 10px 20px !important;
        font-size: 14px !important;
    }

    /* ── Badges ───────────────────────────────────────────────── */
    .badge {
        border-radius: 20px !important;
        font-size: 11px !important;
        font-weight: 500 !important;
        padding: 3px 9px !important;
        letter-spacing: 0.02em;
    }

    .badge-success,
    .bg-success {
        background: #e1f5ee !important;
        color: #085041 !important;
    }

    .badge-danger,
    .bg-danger {
        background: #fcebeb !important;
        color: #791f1f !important;
    }

    .badge-warning,
    .bg-warning {
        background: #faeeda !important;
        color: #633806 !important;
    }

    .badge-info,
    .bg-info {
        background: #e6f1fb !important;
        border-color: #b5d4f4 !important;
        color: #0c447c !important;
    }

    .badge-primary {
        background: #e1f5ee !important;
        color: #085041 !important;
    }

    .badge-secondary {
        background: #f1efe8 !important;
        color: #5f5e5a !important;
    }

    /* ── Tables ───────────────────────────────────────────────── */
    .table {
        font-size: 13px;
        border-collapse: collapse;
        width: 100%;
    }

    .table thead th {
        padding: 12px 20px;
        text-align: left;
        font-size: 11px;
        font-weight: 600;
        color: #aaa;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        border-bottom: 1px solid #f0f0f0 !important;
        border-top: none !important;
        white-space: nowrap;
        background: #fff;
    }

    .table thead th.text-right {
        text-align: right;
    }

    .table thead th.text-center {
        text-align: center;
    }

    .table tbody tr {
        border-bottom: 1px solid #f6f6f6;
        transition: background 0.12s;
    }

    .table tbody tr:last-child {
        border-bottom: none;
    }

    .table tbody tr:hover {
        background: #fafafa;
    }

    .table tbody td {
        padding: 14px 20px;
        vertical-align: middle;
        color: #555;
        border-top: none !important;
    }

    .table tbody td.text-right {
        text-align: right;
    }

    .table tbody td.text-center {
        text-align: center;
    }

    /* Table cell with icon + name */
    .table-cell-icon {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .table-cell-icon .icon-box {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: #e1f5ee;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .table-cell-icon .icon-box i {
        font-size: 12px;
        color: #0f6e56;
    }

    .table-cell-icon .cell-name {
        font-weight: 500;
        color: #111;
    }

    /* Action buttons in table */
    .table-actions {
        display: flex;
        align-items: center;
        gap: 6px;
        justify-content: flex-end;
    }

    /* Table empty state */
    .table-empty {
        padding: 48px 20px;
        text-align: center;
        color: #bbb;
        font-size: 13px;
    }

    .table-empty i {
        font-size: 28px;
        display: block;
        margin-bottom: 10px;
        color: #e0e0e0;
    }

    .table-empty a {
        color: #1d9e75;
        font-weight: 500;
    }

    /* ── Forms ────────────────────────────────────────────────── */
    .form-control {
        border: 1px solid #eaeaea !important;
        border-radius: 8px !important;
        font-size: 13px !important;
        color: #333 !important;
        padding: 8px 12px !important;
        height: auto !important;
        box-shadow: none !important;
        transition: border-color 0.15s;
    }

    .form-control:focus {
        border-color: #1d9e75 !important;
        box-shadow: 0 0 0 3px rgba(29, 158, 117, 0.1) !important;
    }

    .form-control::placeholder {
        color: #bbb !important;
    }

    .form-group label {
        font-size: 12px;
        font-weight: 600;
        color: #555;
        margin-bottom: 6px;
        letter-spacing: 0.03em;
    }

    select.form-control {
        background-image: none;
    }

    .input-group-text {
        background: #f6f6f6 !important;
        border: 1px solid #eaeaea !important;
        border-radius: 8px !important;
        color: #888 !important;
        font-size: 13px !important;
    }

    /* ── Alerts ───────────────────────────────────────────────── */
    .alert {
        border-radius: 10px !important;
        border: 1px solid transparent !important;
        font-size: 13px !important;
        padding: 12px 16px !important;
    }

    .alert-success {
        background: #e1f5ee !important;
        border-color: #9fe1cb !important;
        color: #085041 !important;
    }

    .alert-danger {
        background: #fcebeb !important;
        border-color: #f7c1c1 !important;
        color: #791f1f !important;
    }

    .alert-warning {
        background: #faeeda !important;
        border-color: #fac775 !important;
        color: #633806 !important;
    }

    .alert-info {
        background: #e6f1fb !important;
        border-color: #b5d4f4 !important;
        color: #0c447c !important;
    }

    /* ── Pagination ───────────────────────────────────────────── */
    .pagination {
        gap: 4px;
    }

    .page-item .page-link {
        border: 1px solid #eaeaea !important;
        border-radius: 8px !important;
        color: #555 !important;
        font-size: 13px !important;
        padding: 6px 12px !important;
        background: #fff !important;
        transition: all 0.15s;
    }

    .page-item .page-link:hover {
        background: #f3f3f3 !important;
        color: #111 !important;
    }

    .page-item.active .page-link {
        background: #1d9e75 !important;
        border-color: #1d9e75 !important;
        color: #fff !important;
    }

    .page-item.disabled .page-link {
        background: #fafafa !important;
        color: #ccc !important;
    }

    /* ── Modal ────────────────────────────────────────────────── */
    .modal-content {
        border: 1px solid #eaeaea !important;
        border-radius: 14px !important;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
    }

    .modal-header {
        border-bottom: 1px solid #f0f0f0 !important;
        padding: 18px 20px !important;
        border-radius: 14px 14px 0 0 !important;
    }

    .modal-title {
        font-size: 15px !important;
        font-weight: 500 !important;
        color: #111 !important;
    }

    .modal-body {
        padding: 20px !important;
    }

    .modal-footer {
        border-top: 1px solid #f0f0f0 !important;
        padding: 14px 20px !important;
        border-radius: 0 0 14px 14px !important;
    }

    .close {
        color: #aaa !important;
        font-size: 18px !important;
    }

    .close:hover {
        color: #555 !important;
    }

    /* ── Footer ───────────────────────────────────────────────── */
    .main-footer {
        background: #ffffff !important;
        border-top: 1px solid #eaeaea !important;
        box-shadow: none !important;
        padding: 12px 20px !important;
        font-size: 12px !important;
        color: #aaa !important;
    }

    /* ── Utilities ────────────────────────────────────────────── */
    .text-muted {
        color: #aaa !important;
    }

    .text-success {
        color: #0f6e56 !important;
    }

    .text-danger {
        color: #791f1f !important;
    }

    .text-warning {
        color: #633806 !important;
    }

    .text-info {
        color: #0c447c !important;
    }

    .text-primary {
        color: #0f6e56 !important;
    }

    .bg-light {
        background: #f8f9fa !important;
    }

    .border {
        border-color: #eaeaea !important;
    }

    .shadow-sm {
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) !important;
    }

    .rounded {
        border-radius: 8px !important;
    }

    .rounded-lg {
        border-radius: 12px !important;
    }

    /* Delete form inline fix */
    .delete-form {
        display: inline-block;
        margin: 0;
    }

    /* ── Scrollbar ────────────────────────────────────────────── */
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #e0e0e0;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #ccc;
    }
</style>
