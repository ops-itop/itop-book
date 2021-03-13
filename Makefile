COVER ?= 30
DEVICE ?= pc
DEBUG ?= 
HIGHLIGHT ?= --highlight-style=tango
CJK ?= -V CJKmainfont:思源宋体 -V CJKoptions:BoldFont=Source\ Han\ Serif\ SC\ Heavy,ItalicFont=FandolKai,SmallCapsFont=思源黑体 -V mainfont:Source\ Serif\ Pro -V sansfont:Source\ Sans\ Pro -V monofont:Source\ Code\ Pro

all: ctexbook elegantbook

ctexbook:
	panbook book -V cover:$(COVER) -V device:$(DEVICE) $(DEBUG) $(HIGHLIGHT) $(CJK)
elegantbook:
	panbook book --style=elegantbook -V cover:images/itop-cover.jpg -V logo:images/itop-logo.png -V device:$(DEVICE) $(DEBUG) $(HIGHLIGHT) $(CJK)

clean:
	panbook clean