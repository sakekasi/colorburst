HDIR=~/Programming/web/colorburst
SDIR=/srv/http/nginx/wordpress/wp-content/themes/colorburst

git:
	git commit --all
	git push
	git --git-dir=$(SDIR)/.git fetch
	git --git-dir=$(SDIR)/.git --work-tree=$(SDIR) merge origin/master


update-srv:
	git --git-dir=$(SDIR)/.git fetch
	git --git-dir=$(SDIR)/.git --work-tree=$(SDIR) merge origin/master

.PHONY: clean
clean:
	-rm *~

