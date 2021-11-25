
<?= $this->extend('template/backend/header') ?>
<?= $this->section('backend_footer') ?>

<!-- chat -->
<div class="side-dropdown side-chat dropdown">
    <a class="side-button side-chat-button" id="chat-dropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-comments-o"></i>
    </a>

    <ul class="dropdown-menu list-unstyled" aria-labelledby="chat-dropdown">
        <li class="dropdown-title darkgrey_bg_color">
            <h4>
                Small Chat
                <span class="pull-right">14.03.2017</span>
            </h4>
        </li>
        <li>

            <ul class="list-unstyled">
                <li class="side-chat-item item-secondary">
                    <h5>
                        Michael Anderson
                        <time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
                            08:50
                        </time>
                    </h5>
                    <div class="danger_bg_color">
                        Duis autem veum iriure dolor in hendrerit
                    </div>
                </li>
                <li class="side-chat-item item-primary">
                    <h5>
                        Jane Walker
                        <time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
                            08:52
                        </time>
                    </h5>
                    <div class="warning_bg_color">
                        Vulputate vese molestie consequatl illum
                    </div>
                </li>
                <li class="side-chat-item item-secondary">
                    <h5>
                        Michael Anderson
                        <time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
                            08:50
                        </time>
                    </h5>
                    <div class="danger_bg_color">
                        Duis autem veum iriure dolor in hendrerit
                    </div>
                </li>
            </ul>
        </li>


        <li role="separator" class="divider"></li>

        <li>
            <div class="side-chat-answer">
                <form class="form-inline button-on-input">
                    <div class="form-group">
                        <label for="side-chat-message" class="sr-only">Message</label>
                        <input type="text" class="form-control" id="side-chat-message" placeholder="Message">
                    </div>
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-paper-plane-o"></i>
                    </button>
                </form>
            </div>
        </li>
    </ul>
</div>
<!-- .chat-dropdown -->


<a class="side-button side-contact-button" data-target="#admin_contact_modal" href="#admin_contact_modal" data-toggle="modal" role="button">
    <i class="fa fa-envelope"></i>
</a>


<?= $this->endSection() ?>