// importing and setting up Font Awesome
import { dom, library } from '@fortawesome/fontawesome-svg-core';

import {
    faAngleRight as farAngleRight,
    faChevronDown as farChevronDown,
    faClipboard as farClipboard,
    faHashtag as farHashtag
} from '@fortawesome/pro-regular-svg-icons';

import {
    faFacebookF as fabFacebookF,
    faGithub as fabGithub,
    faInstagram as fabInstagram,
    faLinkedinIn as fabLinkedinIn,
    faTwitter as fabTwitter,
    faVimeoV as fabVimeoV,
    faYoutube as fabYoutube,
} from '@fortawesome/free-brands-svg-icons';

// load font-awesome libraries
library.add(
    fabFacebookF,
    fabGithub,
    fabInstagram,
    fabLinkedinIn,
    fabTwitter,
    fabVimeoV,
    fabYoutube,
    farAngleRight,
    farChevronDown,
    farClipboard,
    farHashtag
);

// convert i tags to SVG
// dom.watch({
//     autoReplaceSvgRoot: document,
//     observeMutationsRoot: document.body
// });
dom.watch()
