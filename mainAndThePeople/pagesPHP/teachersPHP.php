<div class="middleMenu">
    <div class="middleMenuSearch" action="action_page.php">
        <button type="submit" onclick="search()" name="search"><i class="fa fa-search"></i></button>
        <input id="search_text" type="text" placeholder="Search...">
    </div>
    <div class="middleMenuButtons">
        <div class="flagThing menu top">
            <a href="thePeople.php?target=teacher">Teachers</a>
        </div>

        <div class="flagThing menu bottom">
            <a href="thePeople.php?target=student">Students</a>
        </div>

    </div>
</div>
<h1 class="pb-3"></h1>
<div class="pics">
    <?php
    require ("../model/teacherInfo.php");
    loadUsers();
    ?>
</div>
