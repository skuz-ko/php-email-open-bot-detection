<?php

declare(strict_types=1);

namespace SkuzKo\PhpEmailOpenBotDetection;

class EmailOpenBotDetector
{
    private const KNOWN_BOT_AGENTS = [
        'HubSpot Connect',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246 Mozilla/5.0',
        'AHC/2.1',
        'Amazon CloudFront',
        'Barracuda Sentinel (EE)',
        'python-requests/2.26.0',
        'Python/3.9 aiohttp/3.8.1',
        'lua-resty-http/0.07 (Lua) ngx_lua/10012',
        'lua-resty-http/0.10 (Lua) ngx_lua/10019',
        'okhttp/4.10.0',
        'python-requests/2.27.1',
        'python-requests/2.28.0',
        'lua-resty-http/0.07 (Lua) ngx_lua/10024',
        'cortex/1.0',
        'Aloha/1 CFNetwork/1404.0.5 Darwin/22.3.0',
        'Dalvik/2.1.0 (Linux; U; Android 8.0.0; SM-G930V Build/R16NW)',
        'Java/17.0.2',
        'macOS/13.4 (22F66) dataaccessd/1.0',
        'Snap URL Preview Service; bot; snapchat; https://developers.snap.com/robots',
        'iOS/16.5.1 (20F75) dataaccessd/1.0',
        'Dalvik/2.1.0 (Linux; U; Android 8.1.0; SM-J327V Build/M1AJQ)',
        'W3C-checklink/4.5 [4.160] libwww-perl/5.823',
        'yarn/1.22.4 npm/? node/v16.20.0 linux x64',
        'Microsoft Office/16.0 (Windows NT 10.0; Microsoft Outlook 16.0.14931; Pro)',
        'Microsoft Office/16.0 (Windows NT 10.0; Microsoft Outlook 16.0.16327; Pro)',
        'Social News Desk RSS Scraper',
        'iOS/16.3.1 (20D67) dataaccessd/1.0',
        'facebookexternalua',
        'Jetty/9.4.42.v20210604',
        'Microsoft Exchange/15.20 (Windows NT 10.0; Win64; x64)',
        'Dalvik/2.1.0 (Linux; U; Android 8.1.0; LM-Q710(FGN) Build/OPM1.171019.019)',
        'iOS/15.7 (19H12) dataaccessd/1.0',
        'Wget/1.9.1',
        'Office 365 Connectors',
        'Java/1.8.0_265',
        'iOS/15.7.6 (19H349) dataaccessd/1.0',
        'iOS/16.5 (20F66) dataaccessd/1.0',
        'Dalvik/2.1.0 (Linux; U; Android 12; SM-G970U Build/SP1A.210812.016)',
        'Slackbot-LinkExpanding 1.0 (+https://api.slack.com/robots)',
        'Microsoft Office/16.0 (Windows NT 10.0; Microsoft Outlook 16.0.16227; Pro)',
        'python-requests/2.28.2',
        'SCMGUARD',
        'Apache-HttpClient/4.5.1 (Java/1.8.0_172)',
        'FeedBurner/1.0 (http://www.FeedBurner.com)',
    ];

    public static function isBot(?string $userAgent): bool
    {
        $userAgent = trim((string) $userAgent);
        
        if (!$userAgent) {
            return true;
        }

        if (in_array($userAgent, self::KNOWN_BOT_AGENTS, true)) {
            return true;
        }

        return false;
    }
}
