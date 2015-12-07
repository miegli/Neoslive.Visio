<?php
namespace Neoslive\Visio\DataSource;

use TYPO3\Neos\Service\DataSource\AbstractDataSource;
use TYPO3\TYPO3CR\Domain\Model\NodeInterface;

class IconIonDataSource extends AbstractDataSource {

    /**
     * @var string
     */
    static protected $identifier = 'neoslive-visio-ion-icons';

    /**
     * Get data
     *
     * @param NodeInterface $node The node that is currently edited (optional)
     * @param array $arguments Additional arguments (key / value)
     * @return array JSON serializable data
     */
    public function getData(NodeInterface $node = NULL, array $arguments)
    {


        $icon = array();
        $icon[] = "ion-alert";
        $icon[] = "ion-alert-circled";
        $icon[] = "ion-android-add";
        $icon[] = "ion-android-add-circle";
        $icon[] = "ion-android-alarm-clock";
        $icon[] = "ion-android-alert";
        $icon[] = "ion-android-apps";
        $icon[] = "ion-android-archive";
        $icon[] = "ion-android-arrow-back";
        $icon[] = "ion-android-arrow-down";
        $icon[] = "ion-android-arrow-dropdown";
        $icon[] = "ion-android-arrow-dropdown-circle";
        $icon[] = "ion-android-arrow-dropleft";
        $icon[] = "ion-android-arrow-dropleft-circle";
        $icon[] = "ion-android-arrow-dropright";
        $icon[] = "ion-android-arrow-dropright-circle";
        $icon[] = "ion-android-arrow-dropup";
        $icon[] = "ion-android-arrow-dropup-circle";
        $icon[] = "ion-android-arrow-forward";
        $icon[] = "ion-android-arrow-up";
        $icon[] = "ion-android-attach";
        $icon[] = "ion-android-bar";
        $icon[] = "ion-android-bicycle";
        $icon[] = "ion-android-boat";
        $icon[] = "ion-android-bookmark";
        $icon[] = "ion-android-bulb";
        $icon[] = "ion-android-bus";
        $icon[] = "ion-android-calendar";
        $icon[] = "ion-android-call";
        $icon[] = "ion-android-camera";
        $icon[] = "ion-android-cancel";
        $icon[] = "ion-android-car";
        $icon[] = "ion-android-cart";
        $icon[] = "ion-android-chat";
        $icon[] = "ion-android-checkbox";
        $icon[] = "ion-android-checkbox-blank";
        $icon[] = "ion-android-checkbox-outline";
        $icon[] = "ion-android-checkbox-outline-blank";
        $icon[] = "ion-android-checkmark-circle";
        $icon[] = "ion-android-clipboard";
        $icon[] = "ion-android-close";
        $icon[] = "ion-android-cloud";
        $icon[] = "ion-android-cloud-circle";
        $icon[] = "ion-android-cloud-done";
        $icon[] = "ion-android-cloud-outline";
        $icon[] = "ion-android-color-palette";
        $icon[] = "ion-android-compass";
        $icon[] = "ion-android-contact";
        $icon[] = "ion-android-contacts";
        $icon[] = "ion-android-contract";
        $icon[] = "ion-android-create";
        $icon[] = "ion-android-delete";
        $icon[] = "ion-android-desktop";
        $icon[] = "ion-android-document";
        $icon[] = "ion-android-done";
        $icon[] = "ion-android-done-all";
        $icon[] = "ion-android-download";
        $icon[] = "ion-android-drafts";
        $icon[] = "ion-android-exit";
        $icon[] = "ion-android-expand";
        $icon[] = "ion-android-favorite";
        $icon[] = "ion-android-favorite-outline";
        $icon[] = "ion-android-film";
        $icon[] = "ion-android-folder";
        $icon[] = "ion-android-folder-open";
        $icon[] = "ion-android-funnel";
        $icon[] = "ion-android-globe";
        $icon[] = "ion-android-hand";
        $icon[] = "ion-android-hangout";
        $icon[] = "ion-android-happy";
        $icon[] = "ion-android-home";
        $icon[] = "ion-android-image";
        $icon[] = "ion-android-laptop";
        $icon[] = "ion-android-list";
        $icon[] = "ion-android-locate";
        $icon[] = "ion-android-lock";
        $icon[] = "ion-android-mail";
        $icon[] = "ion-android-map";
        $icon[] = "ion-android-menu";
        $icon[] = "ion-android-microphone";
        $icon[] = "ion-android-microphone-off";
        $icon[] = "ion-android-more-horizontal";
        $icon[] = "ion-android-more-vertical";
        $icon[] = "ion-android-navigate";
        $icon[] = "ion-android-notifications";
        $icon[] = "ion-android-notifications-none";
        $icon[] = "ion-android-notifications-off";
        $icon[] = "ion-android-open";
        $icon[] = "ion-android-options";
        $icon[] = "ion-android-people";
        $icon[] = "ion-android-person";
        $icon[] = "ion-android-person-add";
        $icon[] = "ion-android-phone-landscape";
        $icon[] = "ion-android-phone-portrait";
        $icon[] = "ion-android-pin";
        $icon[] = "ion-android-plane";
        $icon[] = "ion-android-playstore";
        $icon[] = "ion-android-print";
        $icon[] = "ion-android-radio-button-off";
        $icon[] = "ion-android-radio-button-on";
        $icon[] = "ion-android-refresh";
        $icon[] = "ion-android-remove";
        $icon[] = "ion-android-remove-circle";
        $icon[] = "ion-android-restaurant";
        $icon[] = "ion-android-sad";
        $icon[] = "ion-android-search";
        $icon[] = "ion-android-send";
        $icon[] = "ion-android-settings";
        $icon[] = "ion-android-share";
        $icon[] = "ion-android-share-alt";
        $icon[] = "ion-android-star";
        $icon[] = "ion-android-star-half";
        $icon[] = "ion-android-star-outline";
        $icon[] = "ion-android-stopwatch";
        $icon[] = "ion-android-subway";
        $icon[] = "ion-android-sunny";
        $icon[] = "ion-android-sync";
        $icon[] = "ion-android-textsms";
        $icon[] = "ion-android-time";
        $icon[] = "ion-android-train";
        $icon[] = "ion-android-unlock";
        $icon[] = "ion-android-upload";
        $icon[] = "ion-android-volume-down";
        $icon[] = "ion-android-volume-mute";
        $icon[] = "ion-android-volume-off";
        $icon[] = "ion-android-volume-up";
        $icon[] = "ion-android-walk";
        $icon[] = "ion-android-warning";
        $icon[] = "ion-android-watch";
        $icon[] = "ion-android-wifi";
        $icon[] = "ion-aperture";
        $icon[] = "ion-archive";
        $icon[] = "ion-arrow-down-a";
        $icon[] = "ion-arrow-down-b";
        $icon[] = "ion-arrow-down-c";
        $icon[] = "ion-arrow-expand";
        $icon[] = "ion-arrow-graph-down-left";
        $icon[] = "ion-arrow-graph-down-right";
        $icon[] = "ion-arrow-graph-up-left";
        $icon[] = "ion-arrow-graph-up-right";
        $icon[] = "ion-arrow-left-a";
        $icon[] = "ion-arrow-left-b";
        $icon[] = "ion-arrow-left-c";
        $icon[] = "ion-arrow-move";
        $icon[] = "ion-arrow-resize";
        $icon[] = "ion-arrow-return-left";
        $icon[] = "ion-arrow-return-right";
        $icon[] = "ion-arrow-right-a";
        $icon[] = "ion-arrow-right-b";
        $icon[] = "ion-arrow-right-c";
        $icon[] = "ion-arrow-shrink";
        $icon[] = "ion-arrow-swap";
        $icon[] = "ion-arrow-up-a";
        $icon[] = "ion-arrow-up-b";
        $icon[] = "ion-arrow-up-c";
        $icon[] = "ion-asterisk";
        $icon[] = "ion-at";
        $icon[] = "ion-backspace";
        $icon[] = "ion-backspace-outline";
        $icon[] = "ion-bag";
        $icon[] = "ion-battery-charging";
        $icon[] = "ion-battery-empty";
        $icon[] = "ion-battery-full";
        $icon[] = "ion-battery-half";
        $icon[] = "ion-battery-low";
        $icon[] = "ion-beaker";
        $icon[] = "ion-beer";
        $icon[] = "ion-bluetooth";
        $icon[] = "ion-bonfire";
        $icon[] = "ion-bookmark";
        $icon[] = "ion-bowtie";
        $icon[] = "ion-briefcase";
        $icon[] = "ion-bug";
        $icon[] = "ion-calculator";
        $icon[] = "ion-calendar";
        $icon[] = "ion-camera";
        $icon[] = "ion-card";
        $icon[] = "ion-cash";
        $icon[] = "ion-chatbox";
        $icon[] = "ion-chatbox-working";
        $icon[] = "ion-chatboxes";
        $icon[] = "ion-chatbubble";
        $icon[] = "ion-chatbubble-working";
        $icon[] = "ion-chatbubbles";
        $icon[] = "ion-checkmark";
        $icon[] = "ion-checkmark-circled";
        $icon[] = "ion-checkmark-round";
        $icon[] = "ion-chevron-down";
        $icon[] = "ion-chevron-left";
        $icon[] = "ion-chevron-right";
        $icon[] = "ion-chevron-up";
        $icon[] = "ion-clipboard";
        $icon[] = "ion-clock";
        $icon[] = "ion-close";
        $icon[] = "ion-close-circled";
        $icon[] = "ion-close-round";
        $icon[] = "ion-closed-captioning";
        $icon[] = "ion-cloud";
        $icon[] = "ion-code";
        $icon[] = "ion-code-download";
        $icon[] = "ion-code-working";
        $icon[] = "ion-coffee";
        $icon[] = "ion-compass";
        $icon[] = "ion-compose";
        $icon[] = "ion-connection-bars";
        $icon[] = "ion-contrast";
        $icon[] = "ion-crop";
        $icon[] = "ion-cube";
        $icon[] = "ion-disc";
        $icon[] = "ion-document";
        $icon[] = "ion-document-text";
        $icon[] = "ion-drag";
        $icon[] = "ion-earth";
        $icon[] = "ion-easel";
        $icon[] = "ion-edit";
        $icon[] = "ion-egg";
        $icon[] = "ion-eject";
        $icon[] = "ion-email";
        $icon[] = "ion-email-unread";
        $icon[] = "ion-erlenmeyer-flask";
        $icon[] = "ion-erlenmeyer-flask-bubbles";
        $icon[] = "ion-eye";
        $icon[] = "ion-eye-disabled";
        $icon[] = "ion-female";
        $icon[] = "ion-filing";
        $icon[] = "ion-film-marker";
        $icon[] = "ion-fireball";
        $icon[] = "ion-flag";
        $icon[] = "ion-flame";
        $icon[] = "ion-flash";
        $icon[] = "ion-flash-off";
        $icon[] = "ion-folder";
        $icon[] = "ion-fork";
        $icon[] = "ion-fork-repo";
        $icon[] = "ion-forward";
        $icon[] = "ion-funnel";
        $icon[] = "ion-gear-a";
        $icon[] = "ion-gear-b";
        $icon[] = "ion-grid";
        $icon[] = "ion-hammer";
        $icon[] = "ion-happy";
        $icon[] = "ion-happy-outline";
        $icon[] = "ion-headphone";
        $icon[] = "ion-heart";
        $icon[] = "ion-heart-broken";
        $icon[] = "ion-help";
        $icon[] = "ion-help-buoy";
        $icon[] = "ion-help-circled";
        $icon[] = "ion-home";
        $icon[] = "ion-icecream";
        $icon[] = "ion-image";
        $icon[] = "ion-images";
        $icon[] = "ion-information";
        $icon[] = "ion-information-circled";
        $icon[] = "ion-ionic";
        $icon[] = "ion-ios-alarm";
        $icon[] = "ion-ios-alarm-outline";
        $icon[] = "ion-ios-albums";
        $icon[] = "ion-ios-albums-outline";
        $icon[] = "ion-ios-americanfootball";
        $icon[] = "ion-ios-americanfootball-outline";
        $icon[] = "ion-ios-analytics";
        $icon[] = "ion-ios-analytics-outline";
        $icon[] = "ion-ios-arrow-back";
        $icon[] = "ion-ios-arrow-down";
        $icon[] = "ion-ios-arrow-forward";
        $icon[] = "ion-ios-arrow-left";
        $icon[] = "ion-ios-arrow-right";
        $icon[] = "ion-ios-arrow-thin-down";
        $icon[] = "ion-ios-arrow-thin-left";
        $icon[] = "ion-ios-arrow-thin-right";
        $icon[] = "ion-ios-arrow-thin-up";
        $icon[] = "ion-ios-arrow-up";
        $icon[] = "ion-ios-at";
        $icon[] = "ion-ios-at-outline";
        $icon[] = "ion-ios-barcode";
        $icon[] = "ion-ios-barcode-outline";
        $icon[] = "ion-ios-baseball";
        $icon[] = "ion-ios-baseball-outline";
        $icon[] = "ion-ios-basketball";
        $icon[] = "ion-ios-basketball-outline";
        $icon[] = "ion-ios-bell";
        $icon[] = "ion-ios-bell-outline";
        $icon[] = "ion-ios-body";
        $icon[] = "ion-ios-body-outline";
        $icon[] = "ion-ios-bolt";
        $icon[] = "ion-ios-bolt-outline";
        $icon[] = "ion-ios-book";
        $icon[] = "ion-ios-book-outline";
        $icon[] = "ion-ios-bookmarks";
        $icon[] = "ion-ios-bookmarks-outline";
        $icon[] = "ion-ios-box";
        $icon[] = "ion-ios-box-outline";
        $icon[] = "ion-ios-briefcase";
        $icon[] = "ion-ios-briefcase-outline";
        $icon[] = "ion-ios-browsers";
        $icon[] = "ion-ios-browsers-outline";
        $icon[] = "ion-ios-calculator";
        $icon[] = "ion-ios-calculator-outline";
        $icon[] = "ion-ios-calendar";
        $icon[] = "ion-ios-calendar-outline";
        $icon[] = "ion-ios-camera";
        $icon[] = "ion-ios-camera-outline";
        $icon[] = "ion-ios-cart";
        $icon[] = "ion-ios-cart-outline";
        $icon[] = "ion-ios-chatboxes";
        $icon[] = "ion-ios-chatboxes-outline";
        $icon[] = "ion-ios-chatbubble";
        $icon[] = "ion-ios-chatbubble-outline";
        $icon[] = "ion-ios-checkmark";
        $icon[] = "ion-ios-checkmark-empty";
        $icon[] = "ion-ios-checkmark-outline";
        $icon[] = "ion-ios-circle-filled";
        $icon[] = "ion-ios-circle-outline";
        $icon[] = "ion-ios-clock";
        $icon[] = "ion-ios-clock-outline";
        $icon[] = "ion-ios-close";
        $icon[] = "ion-ios-close-empty";
        $icon[] = "ion-ios-close-outline";
        $icon[] = "ion-ios-cloud";
        $icon[] = "ion-ios-cloud-download";
        $icon[] = "ion-ios-cloud-download-outline";
        $icon[] = "ion-ios-cloud-outline";
        $icon[] = "ion-ios-cloud-upload";
        $icon[] = "ion-ios-cloud-upload-outline";
        $icon[] = "ion-ios-cloudy";
        $icon[] = "ion-ios-cloudy-night";
        $icon[] = "ion-ios-cloudy-night-outline";
        $icon[] = "ion-ios-cloudy-outline";
        $icon[] = "ion-ios-cog";
        $icon[] = "ion-ios-cog-outline";
        $icon[] = "ion-ios-color-filter";
        $icon[] = "ion-ios-color-filter-outline";
        $icon[] = "ion-ios-color-wand";
        $icon[] = "ion-ios-color-wand-outline";
        $icon[] = "ion-ios-compose";
        $icon[] = "ion-ios-compose-outline";
        $icon[] = "ion-ios-contact";
        $icon[] = "ion-ios-contact-outline";
        $icon[] = "ion-ios-copy";
        $icon[] = "ion-ios-copy-outline";
        $icon[] = "ion-ios-crop";
        $icon[] = "ion-ios-crop-strong";
        $icon[] = "ion-ios-download";
        $icon[] = "ion-ios-download-outline";
        $icon[] = "ion-ios-drag";
        $icon[] = "ion-ios-email";
        $icon[] = "ion-ios-email-outline";
        $icon[] = "ion-ios-eye";
        $icon[] = "ion-ios-eye-outline";
        $icon[] = "ion-ios-fastforward";
        $icon[] = "ion-ios-fastforward-outline";
        $icon[] = "ion-ios-filing";
        $icon[] = "ion-ios-filing-outline";
        $icon[] = "ion-ios-film";
        $icon[] = "ion-ios-film-outline";
        $icon[] = "ion-ios-flag";
        $icon[] = "ion-ios-flag-outline";
        $icon[] = "ion-ios-flame";
        $icon[] = "ion-ios-flame-outline";
        $icon[] = "ion-ios-flask";
        $icon[] = "ion-ios-flask-outline";
        $icon[] = "ion-ios-flower";
        $icon[] = "ion-ios-flower-outline";
        $icon[] = "ion-ios-folder";
        $icon[] = "ion-ios-folder-outline";
        $icon[] = "ion-ios-football";
        $icon[] = "ion-ios-football-outline";
        $icon[] = "ion-ios-game-controller-a";
        $icon[] = "ion-ios-game-controller-a-outline";
        $icon[] = "ion-ios-game-controller-b";
        $icon[] = "ion-ios-game-controller-b-outline";
        $icon[] = "ion-ios-gear";
        $icon[] = "ion-ios-gear-outline";
        $icon[] = "ion-ios-glasses";
        $icon[] = "ion-ios-glasses-outline";
        $icon[] = "ion-ios-grid-view";
        $icon[] = "ion-ios-grid-view-outline";
        $icon[] = "ion-ios-heart";
        $icon[] = "ion-ios-heart-outline";
        $icon[] = "ion-ios-help";
        $icon[] = "ion-ios-help-empty";
        $icon[] = "ion-ios-help-outline";
        $icon[] = "ion-ios-home";
        $icon[] = "ion-ios-home-outline";
        $icon[] = "ion-ios-infinite";
        $icon[] = "ion-ios-infinite-outline";
        $icon[] = "ion-ios-information";
        $icon[] = "ion-ios-information-empty";
        $icon[] = "ion-ios-information-outline";
        $icon[] = "ion-ios-ionic-outline";
        $icon[] = "ion-ios-keypad";
        $icon[] = "ion-ios-keypad-outline";
        $icon[] = "ion-ios-lightbulb";
        $icon[] = "ion-ios-lightbulb-outline";
        $icon[] = "ion-ios-list";
        $icon[] = "ion-ios-list-outline";
        $icon[] = "ion-ios-location";
        $icon[] = "ion-ios-location-outline";
        $icon[] = "ion-ios-locked";
        $icon[] = "ion-ios-locked-outline";
        $icon[] = "ion-ios-loop";
        $icon[] = "ion-ios-loop-strong";
        $icon[] = "ion-ios-medical";
        $icon[] = "ion-ios-medical-outline";
        $icon[] = "ion-ios-medkit";
        $icon[] = "ion-ios-medkit-outline";
        $icon[] = "ion-ios-mic";
        $icon[] = "ion-ios-mic-off";
        $icon[] = "ion-ios-mic-outline";
        $icon[] = "ion-ios-minus";
        $icon[] = "ion-ios-minus-empty";
        $icon[] = "ion-ios-minus-outline";
        $icon[] = "ion-ios-monitor";
        $icon[] = "ion-ios-monitor-outline";
        $icon[] = "ion-ios-moon";
        $icon[] = "ion-ios-moon-outline";
        $icon[] = "ion-ios-more";
        $icon[] = "ion-ios-more-outline";
        $icon[] = "ion-ios-musical-note";
        $icon[] = "ion-ios-musical-notes";
        $icon[] = "ion-ios-navigate";
        $icon[] = "ion-ios-navigate-outline";
        $icon[] = "ion-ios-nutrition";
        $icon[] = "ion-ios-nutrition-outline";
        $icon[] = "ion-ios-paper";
        $icon[] = "ion-ios-paper-outline";
        $icon[] = "ion-ios-paperplane";
        $icon[] = "ion-ios-paperplane-outline";
        $icon[] = "ion-ios-partlysunny";
        $icon[] = "ion-ios-partlysunny-outline";
        $icon[] = "ion-ios-pause";
        $icon[] = "ion-ios-pause-outline";
        $icon[] = "ion-ios-paw";
        $icon[] = "ion-ios-paw-outline";
        $icon[] = "ion-ios-people";
        $icon[] = "ion-ios-people-outline";
        $icon[] = "ion-ios-person";
        $icon[] = "ion-ios-person-outline";
        $icon[] = "ion-ios-personadd";
        $icon[] = "ion-ios-personadd-outline";
        $icon[] = "ion-ios-photos";
        $icon[] = "ion-ios-photos-outline";
        $icon[] = "ion-ios-pie";
        $icon[] = "ion-ios-pie-outline";
        $icon[] = "ion-ios-pint";
        $icon[] = "ion-ios-pint-outline";
        $icon[] = "ion-ios-play";
        $icon[] = "ion-ios-play-outline";
        $icon[] = "ion-ios-plus";
        $icon[] = "ion-ios-plus-empty";
        $icon[] = "ion-ios-plus-outline";
        $icon[] = "ion-ios-pricetag";
        $icon[] = "ion-ios-pricetag-outline";
        $icon[] = "ion-ios-pricetags";
        $icon[] = "ion-ios-pricetags-outline";
        $icon[] = "ion-ios-printer";
        $icon[] = "ion-ios-printer-outline";
        $icon[] = "ion-ios-pulse";
        $icon[] = "ion-ios-pulse-strong";
        $icon[] = "ion-ios-rainy";
        $icon[] = "ion-ios-rainy-outline";
        $icon[] = "ion-ios-recording";
        $icon[] = "ion-ios-recording-outline";
        $icon[] = "ion-ios-redo";
        $icon[] = "ion-ios-redo-outline";
        $icon[] = "ion-ios-refresh";
        $icon[] = "ion-ios-refresh-empty";
        $icon[] = "ion-ios-refresh-outline";
        $icon[] = "ion-ios-reload";
        $icon[] = "ion-ios-reverse-camera";
        $icon[] = "ion-ios-reverse-camera-outline";
        $icon[] = "ion-ios-rewind";
        $icon[] = "ion-ios-rewind-outline";
        $icon[] = "ion-ios-rose";
        $icon[] = "ion-ios-rose-outline";
        $icon[] = "ion-ios-search";
        $icon[] = "ion-ios-search-strong";
        $icon[] = "ion-ios-settings";
        $icon[] = "ion-ios-settings-strong";
        $icon[] = "ion-ios-shuffle";
        $icon[] = "ion-ios-shuffle-strong";
        $icon[] = "ion-ios-skipbackward";
        $icon[] = "ion-ios-skipbackward-outline";
        $icon[] = "ion-ios-skipforward";
        $icon[] = "ion-ios-skipforward-outline";
        $icon[] = "ion-ios-snowy";
        $icon[] = "ion-ios-speedometer";
        $icon[] = "ion-ios-speedometer-outline";
        $icon[] = "ion-ios-star";
        $icon[] = "ion-ios-star-half";
        $icon[] = "ion-ios-star-outline";
        $icon[] = "ion-ios-stopwatch";
        $icon[] = "ion-ios-stopwatch-outline";
        $icon[] = "ion-ios-sunny";
        $icon[] = "ion-ios-sunny-outline";
        $icon[] = "ion-ios-telephone";
        $icon[] = "ion-ios-telephone-outline";
        $icon[] = "ion-ios-tennisball";
        $icon[] = "ion-ios-tennisball-outline";
        $icon[] = "ion-ios-thunderstorm";
        $icon[] = "ion-ios-thunderstorm-outline";
        $icon[] = "ion-ios-time";
        $icon[] = "ion-ios-time-outline";
        $icon[] = "ion-ios-timer";
        $icon[] = "ion-ios-timer-outline";
        $icon[] = "ion-ios-toggle";
        $icon[] = "ion-ios-toggle-outline";
        $icon[] = "ion-ios-trash";
        $icon[] = "ion-ios-trash-outline";
        $icon[] = "ion-ios-undo";
        $icon[] = "ion-ios-undo-outline";
        $icon[] = "ion-ios-unlocked";
        $icon[] = "ion-ios-unlocked-outline";
        $icon[] = "ion-ios-upload";
        $icon[] = "ion-ios-upload-outline";
        $icon[] = "ion-ios-videocam";
        $icon[] = "ion-ios-videocam-outline";
        $icon[] = "ion-ios-volume-high";
        $icon[] = "ion-ios-volume-low";
        $icon[] = "ion-ios-wineglass";
        $icon[] = "ion-ios-wineglass-outline";
        $icon[] = "ion-ios-world";
        $icon[] = "ion-ios-world-outline";
        $icon[] = "ion-ipad";
        $icon[] = "ion-iphone";
        $icon[] = "ion-ipod";
        $icon[] = "ion-jet";
        $icon[] = "ion-key";
        $icon[] = "ion-knife";
        $icon[] = "ion-laptop";
        $icon[] = "ion-leaf";
        $icon[] = "ion-levels";
        $icon[] = "ion-lightbulb";
        $icon[] = "ion-link";
        $icon[] = "ion-load-a";
        $icon[] = "ion-load-b";
        $icon[] = "ion-load-c";
        $icon[] = "ion-load-d";
        $icon[] = "ion-location";
        $icon[] = "ion-lock-combination";
        $icon[] = "ion-locked";
        $icon[] = "ion-log-in";
        $icon[] = "ion-log-out";
        $icon[] = "ion-loop";
        $icon[] = "ion-magnet";
        $icon[] = "ion-male";
        $icon[] = "ion-man";
        $icon[] = "ion-map";
        $icon[] = "ion-medkit";
        $icon[] = "ion-merge";
        $icon[] = "ion-mic-a";
        $icon[] = "ion-mic-b";
        $icon[] = "ion-mic-c";
        $icon[] = "ion-minus";
        $icon[] = "ion-minus-circled";
        $icon[] = "ion-minus-round";
        $icon[] = "ion-model-s";
        $icon[] = "ion-monitor";
        $icon[] = "ion-more";
        $icon[] = "ion-mouse";
        $icon[] = "ion-music-note";
        $icon[] = "ion-navicon";
        $icon[] = "ion-navicon-round";
        $icon[] = "ion-navigate";
        $icon[] = "ion-network";
        $icon[] = "ion-no-smoking";
        $icon[] = "ion-nuclear";
        $icon[] = "ion-outlet";
        $icon[] = "ion-paintbrush";
        $icon[] = "ion-paintbucket";
        $icon[] = "ion-paper-airplane";
        $icon[] = "ion-paperclip";
        $icon[] = "ion-pause";
        $icon[] = "ion-person";
        $icon[] = "ion-person-add";
        $icon[] = "ion-person-stalker";
        $icon[] = "ion-pie-graph";
        $icon[] = "ion-pin";
        $icon[] = "ion-pinpoint";
        $icon[] = "ion-pizza";
        $icon[] = "ion-plane";
        $icon[] = "ion-planet";
        $icon[] = "ion-play";
        $icon[] = "ion-playstation";
        $icon[] = "ion-plus";
        $icon[] = "ion-plus-circled";
        $icon[] = "ion-plus-round";
        $icon[] = "ion-podium";
        $icon[] = "ion-pound";
        $icon[] = "ion-power";
        $icon[] = "ion-pricetag";
        $icon[] = "ion-pricetags";
        $icon[] = "ion-printer";
        $icon[] = "ion-pull-request";
        $icon[] = "ion-qr-scanner";
        $icon[] = "ion-quote";
        $icon[] = "ion-radio-waves";
        $icon[] = "ion-record";
        $icon[] = "ion-refresh";
        $icon[] = "ion-reply";
        $icon[] = "ion-reply-all";
        $icon[] = "ion-ribbon-a";
        $icon[] = "ion-ribbon-b";
        $icon[] = "ion-sad";
        $icon[] = "ion-sad-outline";
        $icon[] = "ion-scissors";
        $icon[] = "ion-search";
        $icon[] = "ion-settings";
        $icon[] = "ion-share";
        $icon[] = "ion-shuffle";
        $icon[] = "ion-skip-backward";
        $icon[] = "ion-skip-forward";
        $icon[] = "ion-social-android";
        $icon[] = "ion-social-android-outline";
        $icon[] = "ion-social-angular";
        $icon[] = "ion-social-angular-outline";
        $icon[] = "ion-social-apple";
        $icon[] = "ion-social-apple-outline";
        $icon[] = "ion-social-bitcoin";
        $icon[] = "ion-social-bitcoin-outline";
        $icon[] = "ion-social-buffer";
        $icon[] = "ion-social-buffer-outline";
        $icon[] = "ion-social-chrome";
        $icon[] = "ion-social-chrome-outline";
        $icon[] = "ion-social-codepen";
        $icon[] = "ion-social-codepen-outline";
        $icon[] = "ion-social-css3";
        $icon[] = "ion-social-css3-outline";
        $icon[] = "ion-social-designernews";
        $icon[] = "ion-social-designernews-outline";
        $icon[] = "ion-social-dribbble";
        $icon[] = "ion-social-dribbble-outline";
        $icon[] = "ion-social-dropbox";
        $icon[] = "ion-social-dropbox-outline";
        $icon[] = "ion-social-euro";
        $icon[] = "ion-social-euro-outline";
        $icon[] = "ion-social-facebook";
        $icon[] = "ion-social-facebook-outline";
        $icon[] = "ion-social-foursquare";
        $icon[] = "ion-social-foursquare-outline";
        $icon[] = "ion-social-freebsd-devil";
        $icon[] = "ion-social-github";
        $icon[] = "ion-social-github-outline";
        $icon[] = "ion-social-google";
        $icon[] = "ion-social-google-outline";
        $icon[] = "ion-social-googleplus";
        $icon[] = "ion-social-googleplus-outline";
        $icon[] = "ion-social-hackernews";
        $icon[] = "ion-social-hackernews-outline";
        $icon[] = "ion-social-html5";
        $icon[] = "ion-social-html5-outline";
        $icon[] = "ion-social-instagram";
        $icon[] = "ion-social-instagram-outline";
        $icon[] = "ion-social-javascript";
        $icon[] = "ion-social-javascript-outline";
        $icon[] = "ion-social-linkedin";
        $icon[] = "ion-social-linkedin-outline";
        $icon[] = "ion-social-markdown";
        $icon[] = "ion-social-nodejs";
        $icon[] = "ion-social-octocat";
        $icon[] = "ion-social-pinterest";
        $icon[] = "ion-social-pinterest-outline";
        $icon[] = "ion-social-python";
        $icon[] = "ion-social-reddit";
        $icon[] = "ion-social-reddit-outline";
        $icon[] = "ion-social-rss";
        $icon[] = "ion-social-rss-outline";
        $icon[] = "ion-social-sass";
        $icon[] = "ion-social-skype";
        $icon[] = "ion-social-skype-outline";
        $icon[] = "ion-social-snapchat";
        $icon[] = "ion-social-snapchat-outline";
        $icon[] = "ion-social-tumblr";
        $icon[] = "ion-social-tumblr-outline";
        $icon[] = "ion-social-tux";
        $icon[] = "ion-social-twitch";
        $icon[] = "ion-social-twitch-outline";
        $icon[] = "ion-social-twitter";
        $icon[] = "ion-social-twitter-outline";
        $icon[] = "ion-social-usd";
        $icon[] = "ion-social-usd-outline";
        $icon[] = "ion-social-vimeo";
        $icon[] = "ion-social-vimeo-outline";
        $icon[] = "ion-social-whatsapp";
        $icon[] = "ion-social-whatsapp-outline";
        $icon[] = "ion-social-windows";
        $icon[] = "ion-social-windows-outline";
        $icon[] = "ion-social-wordpress";
        $icon[] = "ion-social-wordpress-outline";
        $icon[] = "ion-social-yahoo";
        $icon[] = "ion-social-yahoo-outline";
        $icon[] = "ion-social-yen";
        $icon[] = "ion-social-yen-outline";
        $icon[] = "ion-social-youtube";
        $icon[] = "ion-social-youtube-outline";
        $icon[] = "ion-soup-can";
        $icon[] = "ion-soup-can-outline";
        $icon[] = "ion-speakerphone";
        $icon[] = "ion-speedometer";
        $icon[] = "ion-spoon";
        $icon[] = "ion-star";
        $icon[] = "ion-stats-bars";
        $icon[] = "ion-steam";
        $icon[] = "ion-stop";
        $icon[] = "ion-thermometer";
        $icon[] = "ion-thumbsdown";
        $icon[] = "ion-thumbsup";
        $icon[] = "ion-toggle";
        $icon[] = "ion-toggle-filled";
        $icon[] = "ion-transgender";
        $icon[] = "ion-trash-a";
        $icon[] = "ion-trash-b";
        $icon[] = "ion-trophy";
        $icon[] = "ion-tshirt";
        $icon[] = "ion-tshirt-outline";
        $icon[] = "ion-umbrella";
        $icon[] = "ion-university";
        $icon[] = "ion-unlocked";
        $icon[] = "ion-upload";
        $icon[] = "ion-usb";
        $icon[] = "ion-videocamera";
        $icon[] = "ion-volume-high";
        $icon[] = "ion-volume-low";
        $icon[] = "ion-volume-medium";
        $icon[] = "ion-volume-mute";
        $icon[] = "ion-wand";
        $icon[] = "ion-waterdrop";
        $icon[] = "ion-wifi";
        $icon[] = "ion-wineglass";
        $icon[] = "ion-woman";
        $icon[] = "ion-wrench";
        $icon[] = "ion-xbox";

        sort($icon);

        foreach ($icon as $i) {
            $icons[$i] = array('label' => $i, 'group' => substr($i,3,1), 'icon' => 'fa '.$i);
        }



        return $icons;



    }
}