var GFFrontendFeeds=function(e){var o=this,t=jQuery;o.init=function(){o.options=e,o.triggerInputIds=o.getTriggerInputIds(o.options.feeds),o.activeFeeds=[],o.evaluateFeeds(),o.bindEvents()},o.bindEvents=function(){gform.addAction("gform_input_change",(function(e,d,n){var i=parseInt(n)+"",r=-1!==t.inArray(n,o.triggerInputIds)||-1!==t.inArray(i,o.triggerInputIds);o.options.formId==d&&r&&o.evaluateFeeds()}))},o.evaluateFeeds=function(){var e,t,d;for(i=0;i<o.options.feeds.length;i++)e=o.options.feeds[i],t=o.evaluateFeed(e,o.options.formId),d=o.isFeedActivated(e),t||null===d?t&&!d&&(!e.isSingleFeed||e.isSingleFeed&&o.hasPriority(e.feedId,e.addonSlug))&&o.activateFeed(e):o.deactivateFeed(e);gform.doAction("gform_frontend_feeds_evaluated",o.options.feeds,o.options.formId,o),gform.doAction("gform_frontend_feeds_evaluated_{0}".format(o.options.formId),o.options.feeds,o.options.formId,o),gform.doAction("gform_{0}_frontend_feeds_evaluated".format(e.addonSlug),o.options.feeds,o.options.formId,o),gform.doAction("gform_{0}_frontend_feeds_evaluated_{0}".format(e.addonSlug,o.options.formId),o.options.feeds,o.options.formId,o)},o.evaluateFeed=function(e,o){return!e.conditionalLogic||"show"==gf_get_field_action(o,e.conditionalLogic)},o.getTriggerInputIds=function(){for(var e=[],d=0;d<o.options.feeds.length;d++){var n=o.options.feeds[d];if(n.conditionalLogic)for(var i=0;i<n.conditionalLogic.rules.length;i++){var r=o.options.feeds[d].conditionalLogic.rules[i];-1==t.inArray(r.fieldId,e)&&e.push(r.fieldId)}}return e},o.isFeedActivated=function(e){return!("object"!=typeof e&&!(e=o.getFeed(e)))&&(void 0!==e.isActivated?e.isActivated:null)},o.getFeed=function(e){for(var t=0;t<o.options.feeds.length;t++){var d=o.options.feeds[t];if(d.feedId==e)return d}return!1},o.getFeedsByAddon=function(e,t,d){for(var n=[],i=0;i<o.options.feeds.length;i++){var r=o.options.feeds[i];r.addonSlug!=e||t&&r.feedId==t.feedId||(d?o.isFeedActivated(r)&&n.push(r):n.push(r))}return n},o.activateFeed=function(e){e.feedId&&(e=[e]);for(var t=0;t<e.length;t++){var d=e[t];d.isActivated=!0,gform.doAction("gform_frontend_feed_activated",d,o.options.formId),gform.doAction("gform_frontend_feed_activated_{0}".format(o.options.formId),d,o.options.formId),gform.doAction("gform_{0}_frontend_feed_activated".format(d.addonSlug),d,o.options.formId),gform.doAction("gform_{0}_frontend_feed_activated_{0}".format(d.addonSlug,o.options.formId),d,o.options.formId),d.isSingleFeed&&o.deactivateFeed(o.getFeedsByAddon(d.addonSlug,d))}},o.deactivateFeed=function(e){e.feedId&&(e=[e]);for(var t=0;t<e.length;t++){var d=e[t],n=o.isFeedActivated(d);null!==n&&!1!==n&&(d.isActivated=!1,gform.doAction("gform_frontend_feed_deactivated",d,o.options.formId),gform.doAction("gform_frontend_feed_deactivated_{0}".format(o.options.formId),d,o.options.formId),gform.doAction("gform_{0}_frontend_feed_deactivated".format(d.addonSlug),d,o.options.formId),gform.doAction("gform_{0}_frontend_feed_deactivated_{0}".format(d.addonSlug,o.options.formId),d,o.options.formId))}},o.hasPriority=function(e,t){for(var d=o.getFeedsByAddon(t),n=0;n<=d.length;n++){var i=d[n];if(i.feedId!=e&&i.isActivated)return!1;if(i.feedId==e)return!0}return!1},this.init()};