<ul class="pagination">


    <li>
        <a href="<?= $pager->getPreviousPage()?$pager->getPreviousPage():'#' ?>" <?= $pager->getPreviousPage()?'':'disabled' ?>>
            <span class="sr-only">Prev</span>
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
    </li>
    <?php /*if ($pager->hasPreviousPage()) : */?><!--
        <li>
            <a class="hidden" href="<?/*= $pager->getFirst() */?>" aria-label="<?/*= lang('Pager.first') */?>">
                <span aria-hidden="true"><?/*= lang('Pager.first') */?></span>
            </a>
        </li>
        <li>
            <a href="<?/*= $pager->getPreviousPage() */?>" aria-label="<?/*= lang('Pager.previous') */?>">
                <span class="sr-only">Prev</span>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
        </li>
    --><?php /*endif */?>

    <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?>>
            <a href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>
    <li>
        <a href="<?= $pager->getNextPage()?$pager->getNextPage():'#' ?>" <?= $pager->getNextPage()?'':'disabled'?>>
            <span class="sr-only">Next</span>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </li>
    <?php /*if ($pager->hasNextPage()) : */?><!--
        <li>
            <a href="<?/*= $pager->getNextPage() */?>" aria-label="<?/*= lang('Pager.next') */?>">
                <span class="sr-only">Next</span>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="hidden" href="<?/*= $pager->getLast() */?>" aria-label="<?/*= lang('Pager.last') */?>">
                <span aria-hidden="true"><?/*= lang('Pager.last') */?></span>
            </a>
        </li>
    --><?php /*endif */?>
</ul>