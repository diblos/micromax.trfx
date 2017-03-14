<div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li  <?php echo ($current_page == 'index') ? 'class="active"' : ''; ?> >
            <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li  <?php echo ($current_page == 'calendar') ? 'class="active"' : ''; ?> >
            <a href="calendar.php"><i class="icon-chevron-right"></i> Calendar</a>
        </li>
        <li  <?php echo ($current_page == 'stats') ? 'class="active"' : ''; ?> >
            <a href="stats.php"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
        </li>
        <!-- <li  <?php echo ($current_page == 'form') ? 'class="active"' : ''; ?> >
            <a href="form.php"><i class="icon-chevron-right"></i> Forms</a>
        </li>
        <li  <?php echo ($current_page == 'tables') ? 'class="active"' : ''; ?> >
            <a href="tables.php"><i class="icon-chevron-right"></i> Tables</a>
        </li>
        <li  <?php echo ($current_page == 'buttons') ? 'class="active"' : ''; ?> >
            <a href="buttons.php"><i class="icon-chevron-right"></i> Buttons & Icons</a>
        </li>
        <li  <?php echo ($current_page == 'interface') ? 'class="active"' : ''; ?> >
            <a href="interface.php"><i class="icon-chevron-right"></i> UI & Interface</a>
        </li> -->
        <li>
            <a href="#"><span class="badge badge-success pull-right"><?php echo $ORDER_COUNT; ?></span> Orders</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-success pull-right"><?php echo $INVOICE_COUNT; ?></span> Invoices</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right"><?php echo $CLIENT_COUNT; ?></span> Clients</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right"><?php echo $USER_COUNT; ?></span> Users</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right"><?php echo $MESSAGE_COUNT; ?></span> Messages</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right"><?php echo $REPORT_COUNT; ?></span> Reports</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-important pull-right"><?php echo $ERROR_COUNT; ?></span> Errors</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-warning pull-right"><?php echo $LOG_COUNT; ?></span> Logs</a>
        </li>
    </ul>
</div>
