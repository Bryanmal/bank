<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Micro Bank</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="customer.php">New Customer</a></li>
                <?php if ($_SESSION["type"]==1): ?>
                    <li><a href="register.php">Register New User</a></li>
                    <li><a href="users.php">View User</a></li>
                <?php endif; ?>
                <li><a href="issue.php">Issue Loan</a></li>
                <li><a href="pending.php">Pending Loan</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?=$_SESSION["names"]?></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>