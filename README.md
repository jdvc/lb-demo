[![Gitpod ready-to-code](https://img.shields.io/badge/Gitpod-ready--to--code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/shaal/ddev-gitpod)

# ddev + Gitpod
## Set up a full Drupal dev environment in a browser

This project demonstrates a complete Drupal 9 development environment, utilizing ddev and Gitpod, through your browser.  

## This is a branch from @shaal - creates a blank Drupal site instead of a Unami Demo ##

## Video Demo

<a href="https://vimeo.com/699619764" target="_blank"> <img src="https://imrodmartin.com/sites/default/files/2022-09/cover-github-repo.jpg"></a>

## Prerequisites:
1. [Sign up for gitpod.io](https://gitpod.io/login)

## Try it out:
1. Click on the following link
  <a href="https://gitpod.io/#https://github.com/imrodmartin/ddev-gitpod" target="_blank">https://gitpod.io/#https://github.com/imrodmartin/ddev-gitpod</a>
1. Your environment is being prepared, wait about 40 seconds (A splash screen will appear)
2. VScode IDE will be displayed, a few seconds later you will see a fresh blank Drupal site.
3. Run in terminal `ddev xdebug on`
4. Open VScode's debugger, place a new breakpoint in `web/index.php`
5. Open your website's URL in a browser (at the bottom of the terminal window)
6. :tada:

## Do you like PhpStorm instead of Theia or VScode?
1. Open a bash window at the bottom
2. `.ddev/run-phpstorm.sh`

## How does it work?
1. Gitpod - development environment based on Docker
    1. [.gitpod.yml](https://github.com/shaal/ddev-gitpod/blob/main/.gitpod.yml)
        1. Defines the main docker image this environment is built on - `.gitpod.Dockerfile`
        1. Run prebuild commands:
            1. Start ddev
            1. Run `composer install`
            1. Installs blank Drupal website
    1. [.gitpod.Dockerfile](https://github.com/shaal/ddev-gitpod/blob/main/.gitpod.Dockerfile)
        1. Set base image to Gitpod's `workspace-full` ([link](https://github.com/gitpod-io/workspace-images/tree/master/full))
        1. Install ddev using brew
1. ddev - ridiculously simple setup for complex development environments, allows developers working locally or working with Gitpod in the cloud.
    1. [.ddev/config.yaml](https://github.com/shaal/ddev-gitpod/blob/main/.ddev/config.yaml) - main ddev (default) configuration, can be generated by running `ddev config`

## Thank you
[@rfay](https://github.com/rfay) for your endless patience and relentless support that made this project possible.

### Persistent Storage:
* Gitpod backs up the state of the `/workspace/` folder between workspace starts, so that you can revisit them later. Attention: Files in other locations will not be saved!
* [Additional Storage Solutions](https://www.gitpod.io/docs/self-hosted/latest/install/storage)
