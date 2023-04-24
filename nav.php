<!-- ################ Main Navigation ################ -->
<nav>
    <a class="<?php
    if ($pathParts ['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="index.php"></a>

    <a class="<?php
    if ($pathParts ['filename'] == 'array') {
        print 'activePage';
    }
    ?>" href="array.php"></a>
    
    <a class="<?php
    if ($pathParts ['filename'] == 'detail') {
        print 'activePage';
    }
    ?>" href="detail.php"></a>

    <a class="<?php
    if ($pathParts ['filename'] == 'form') {
        print 'activePage';
    }
    ?>" href="form.php"></a>
</nav>