<!-- ################ Main Navigation ################ -->
<nav>
    <a class="<?php
    if ($pathParts ['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="index.php">Lazy Sunday</a>

    <a class="<?php
    if ($pathParts ['filename'] == 'array') {
        print 'activePage';
    }
    ?>" href="array.php">Stylin'</a>
    
    <a class="<?php
    if ($pathParts ['filename'] == 'detail') {
        print 'activePage';
    }
    ?>" href="detail.php">Gos for Days</a>

    <a class="<?php
    if ($pathParts ['filename'] == 'form') {
        print 'activePage';
    }
    ?>" href="form.php">Survey</a>
</nav>