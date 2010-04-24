<?= $title ?>
=============

This is a brief overview of Three20 styles. Expect more in the near future.

Examples {#examples}
========

    [TTShapeStyle styleWithShape:[TTRoundedRectangleShape shapeWithRadius:4.5] next:
    [TTShadowStyle styleWithColor:RGBCOLOR(255,255,255)
                   blur:1
                   offset:CGSizeMake(0, 1) next:
    [TTReflectiveFillStyle styleWithColor:darkBlue next:
    [TTBevelBorderStyle styleWithHighlight:[darkBlue shadow]
                        shadow:[darkBlue multiplyHue:1 saturation:0.5 value:0.5]
                        width:1
                        lightSource:270 next:
    [TTInsetStyle styleWithInset:UIEdgeInsetsMake(0, -1, 0, -1) next:
    [TTBevelBorderStyle styleWithHighlight:nil shadow:RGBACOLOR(0,0,0,0.15)
                        width:1
                        lightSource:270 next:nil]]]]]]

<div class="image darker" markdown=1>![Toolbar Button](/gfx/api/style/toolbarbutton.png 144x48)</div>

    [TTShapeStyle styleWithShape:[TTSpeechBubbleShape shapeWithRadius:5
                                                      pointLocation:60
                                                      pointAngle:90
                                                      pointSize:CGSizeMake(20,10)] next:
    [TTSolidFillStyle styleWithColor:[UIColor whiteColor] next:
    [TTSolidBorderStyle styleWithColor:black width:1 next:nil]]]

<div class="image darker" markdown=1>![Speech Bubble](/gfx/api/style/speechbubble.png 144x48)</div>

    [TTShapeStyle styleWithShape:[TTRoundedRectangleShape shapeWithRadius:6] next:
    [TTInsetStyle styleWithInset:UIEdgeInsetsMake(1, 1, 2, 1) next:
    [TTReflectiveFillStyle styleWithColor:RGBCOLOR(170, 1, 2)
                           withBottomHighlight:YES next:
    [TTInsetStyle styleWithInset:UIEdgeInsetsMake(-1, -1, -2, -1) next:
    [TTHighlightBorderStyle styleWithColor:RGBCOLOR(113, 115, 117)
                            highlightColor:RGBACOLOR(255, 255, 255, 0.4)
                            width:1 next:
    [TTPartStyle styleWithName:@"image" style:TTSTYLE(buttonImage:) next:nil]]]]]]

<div class="image darker" markdown=1>![Delete Button](/gfx/api/style/deletebutton.png 144x48)</div>
