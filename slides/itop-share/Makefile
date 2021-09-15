THEME ?= metropolis
DEBUG ?=
HIGHLIGHT ?= --highlight-style=tango
CJK ?= -V CJKmainfont:思源宋体 -V CJKoptions:BoldFont=Source\ Han\ Serif\ SC\ Heavy,ItalicFont=FandolKai,SmallCapsFont=思源黑体 -V mainfont:Source\ Serif\ Pro -V sansfont:Source\ Sans\ Pro -V monofont:Source\ Code\ Pro

all: run

run:
	panbook slide --style=$(THEME) $(DEBUG) $(HIGHLIGHT) $(CJK)

all-theme:
	for theme in `panbook slide -l`;do \
		panbook slide --style=$$theme $(DEBUG) $(HIGHLIGHT) $(CJK); \
	done
	panbook slide --style=metropolis $(DEBUG) $(HIGHLIGHT) $(CJK)
clean:
	panbook clean