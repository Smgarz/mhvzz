﻿// (c) 2010 CodePlex Foundation
Type.registerNamespace("Sys.Extended.UI.Seadragon");Type.registerNamespace("Seadragon");Sys.Extended.UI.Seadragon.Config=function(){this.debugMode=!0;this.animationTime=1.5;this.blendTime=.5;this.alwaysBlend=!1;this.autoHideControls=!0;this.immediateRender=!1;this.wrapHorizontal=!1;this.wrapVertical=!1;this.minZoomDimension=.8;this.maxZoomPixelRatio=2;this.visibilityRatio=.5;this.springStiffness=5;this.imageLoaderLimit=2;this.clickTimeThreshold=200;this.clickDistThreshold=5;this.zoomPerClick=2;this.zoomPerSecond=2;this.showNavigationControl=!0;this.maxImageCacheCount=100;this.minPixelRatio=.5;this.mouseNavEnabled=!0;this.navImages={zoomIn:{REST:'WebResource.axd?d=K1kaH6wxWrzCCHigX2wJuW_RL0BTlQTEonBZFwZxkhZLerqgf5u6u93s5ykMBmhaUJNOs8eahPIjFcrDaJkGZkDgBwH90Rp5TcYS2km65ECCUPTcd_tde9dbe4CIj8U2pbU-dwVreAz6-nEhE_F4wg2&t=635110412259261161',GROUP:'WebResource.axd?d=kLC08836nXxEDX40xJUNIJ_pQVhwnG3wIc04ASED3R2-z3KdliPA3YMqjKT9z7Wl0BmyB5ksX3fdZBxrtRHv1XGm8RxbGJuwst_oTOGyuPYBnSTSwI1Rx21jQfhnwNnzOzPCA8JrY7x5SYirBpRz7ZHljxb1rDKPW603XXwTrFg1&t=635110412259261161',HOVER:'WebResource.axd?d=y7zY3j5LPFm7idYYUhia-4pT3IevD2msEkJOLJReLklP-QxNNmjJSSAcgs_o0Spc_Tl2D6DEr1ZgA_0CvF8pLev_pgxkRavBNPSLJWwErfp7EUPpOQT1Nuymgv7vk84wrKZ7uMPvU2p7qkA26qiuwg2&t=635110412259261161',DOWN:'WebResource.axd?d=YeL-8QeyYnfQKpSm8gcVFAlbJtTXetrqpaCSFbrg6BgxAZNy6y66PvJ6gahPSJIeOOhLbofMcALx9qrk9rt5q9DpcZyMO4hji772tb7-OrbMq3NRM_ZHgekjJ4Eo3oI-X6IU8QbiVHiCYon3sOW3Gw2&t=635110412259261161'},zoomOut:{REST:'WebResource.axd?d=_T3DaHeCtmKdKGoRQ8wjNY73ftlx87LORsdTwaNfsfSS0Md6GmrZBvfB5zANvMmKz_jIXyXhGO4Ga17OTMD-cTdzsrY55BPFclJt_d38hmM2Pdd9VlaLli93X7o_oxrwAWgK0dlW_WZxh7JjhfWXUQ2&t=635110412259261161',GROUP:'WebResource.axd?d=q0H1lUbV6KE7opegR0EibzcwaPmq-hHF2oMlcr8nWCkrTgqUfBXsF8zpS5qItq9JOD6B1i29SLdj9woitkWz4ErbjV2PDvyyHLy0VxycmPyolpy5BglD75xVkH7Hsg-iBDCWE_azRTVsxkXfSKAUZ-gI7LovDqWu3oo65NTK6k81&t=635110412259261161',HOVER:'WebResource.axd?d=Uf2JR4e9QBYpHHrgo49dw714292ZPbnfiTB4mprGSiorCSDD_YGwvuGgC-NfWQ8UAW7xqO5XY_CiAeBAQQd4hOxcq4TgCz5yfFys-PX7fdKRkV1q5ipsFe-8NcZV4Sx7jKoToEoFrPp-eguDFdhEVw2&t=635110412259261161',DOWN:'WebResource.axd?d=aij9oarbiKzD5Je28YtIX-VRUUPs2RSPblYxQLqj-LgTUikXEA1XwgXI_2x7xB9a8TUYfWCrX0-k35Te1_L0oYc9wSbxJc5gqSGDd-BN-NVxUGNHrRITRC2rtVMi505AoqDcl7uiB3dn8CWgR2RRPYj2XfXZBR7X3YGIyjPl1rk1&t=635110412259261161'},home:{REST:'WebResource.axd?d=w7p6Bz09f1sikvrb0GyH50XGgbj1rCA04ED27V2kPs0k9Epfrgu2h1gvLvVEvWAyqB56L7JrW-qiMwQjuzoxkvScgYvBq5DgZ2nymyPLxFqtf1CHz7YaZDBsbB99hAq1ylViGN6AGzdSgXSOQcnYRw2&t=635110412259261161',GROUP:'WebResource.axd?d=uo30FVRc1NXXfWhbTNG_RyMAMDszFhX19K2L2IZc_RaRo1Tjw7UhzZAfZ4We6l3k9djvZsx4gQwds9ndHfYsz0kGrhNqqj-ESApNgzgIGQZ4XKR2vlD7-FkvnrFsv3m58HpSi-5NADf7y_Au_2bxA3r1mL64JBuTSBU5c_hgSTQ1&t=635110412259261161',HOVER:'WebResource.axd?d=OiL-Zj2X0YCyAFxI1IpK7sBoCsih2l_NS-d2Oc9TjaVQZwMrjBsp1d0xL0H0cD0BCAW-0CZsIUSff1JB6Ul_uYGkKscm76I1F63QzHRtnAUmQAkmmqKJUzbszZHve5WweMrIzBZl6R_5TmzXexfwSA2&t=635110412259261161',DOWN:'WebResource.axd?d=1J1hQJ5hjhdb6ZvJFlQw4VpOF--5JhAiIKgks6ZQAKL1KJ3RQSluP6wSzBtBnzYbcrcbDUiJ46MWfieCvCJA6EZfaPziU6IA620tt4qxbzKgNkUjCbHlADrpgyvUTiNdlw2JOadcF44LPJtWru1aOg2&t=635110412259261161'},fullpage:{REST:'WebResource.axd?d=KzvJU0ol0SqButnc6VpV9rIkIyudBvifDKwYxilX5JSrDchtJoWFNmmywlDM1rXwO_qWm5HJUrSE7ufV-XQyNUl5jbWE0rdbf6GOwM2Z0HnGK-JIAK7vkFJt-19pJ_jV1Ozi__alEuDxRzjJAIUp4w2&t=635110412259261161',GROUP:'WebResource.axd?d=tWjzDdkQzFlNgIL5WMy6K_kswNUSNrnkHQGTw6xJyM46VMgUL4ozL5Z9BbqKdk6eLuJhY5WpZ1CA9YmLwnMiBxjegl8R3hxM4dmGEEK5dR3V7Im4_yZh3zvCpVYze5-b5Kk97him5qhwTgPF1kE7x6GL3MqgiMVZ6FcEgaebwwg1&t=635110412259261161',HOVER:'WebResource.axd?d=I--OUOYMjUvdQrMuIH1ZjQ5i4sQQqCX4W7ukqUkG7GAL5MRTcxZR7eVBU0ZdqlT0O5YnDfhT1SQtSPmHlas4mUPSo8YqLpbweAB71uq0vsi8XNt1z83PrdKf_4P9JoPr2_wORZSkjAEofVLZb8u2AA2&t=635110412259261161',DOWN:'WebResource.axd?d=u5hN3K_crkM_CEQkqT15XZcrLal2AglSyvWT0HBNjypmpjJ3EMazYjOtwpC4AWXJrEBjCFWY2kC4CtnocJ8O2_dHb3grFPOB7q0FVvBf49KlKsJK79vqzyzSXGbz8bqeqYCYO9xu2TqElmoTno0zrTDIQJ2eVAYcZT_gAcrHB5c1&t=635110412259261161'}}};Sys.Extended.UI.Seadragon.Config.registerClass("Sys.Extended.UI.Seadragon.Config",null,Sys.IDisposable);