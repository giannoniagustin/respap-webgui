## Insiders

Development of RaspAP is made possible thanks to a sponsorware release model. This means that new features are first exclusively released to sponsors as part of [**Insiders**](https://github.com/sponsors/RaspAP). Read on to learn how sponsorship works, and how easy it is to get access to Insiders.

<img width="461" alt="Untitled" src="app/img/insiders.png"> 

### How sponsorship works
New features first land in **Insiders**, which means that *sponsors will have access to them immediately*. Every feature is tied to a funding goal in monthly subscriptions. When a funding goal is hit, the features that are tied to it are merged back into the [public RaspAP repository](https://github.com/giannoniagustin/respap-webgui) and released for general availability. Bugfixes and minor enhancements are always released simultaneously in both editions.

Don't want to sponsor? No problem, RaspAP already has tons of features available, so chances are that most of your requirements are already satisfied. See the list of exclusive features to learn which features are currently only available to sponsors.

### How to become a sponsor
You can [become a sponsor](https://github.com/sponsors/RaspAP) using your individual or organization's GitHub account. Just  pick any tier from $10/month and complete the checkout. Then, after a few hours, you will be added as a team member to the super-secret private GitHub repository containing the Insiders edition, which has all exclusive features. In addition, you get access to Insiders-only team discussions and content.

> ℹ️  **Important**: If you're sponsoring [RaspAP](https://github.com/RaspAP/sponsors) through a GitHub organization, please send a short email to [sponsors@raspap.com](mailto:sponsors@raspap.com) with the name of your organization and the account that should be added as a collaborator.

### Exclusive features
When backers were asked which feature they'd most like to see added to RaspAP, the ability to manage multiple OpenVPN client configurations topped the list of requests. We think this is a great idea, so we're adding this as the first feature exclusive to insiders. 

 ✅ [Multiple OpenVPN client configs](https://docs.raspap.com/openvpn/#multiple-client-configs)  
 ✅ [OpenVPN certificate authentication](https://docs.raspap.com/openvpn/#certificate-authentication)  
 ✅ OpenVPN service logging  
 ✅ Night mode toggle  
 ✅ Restrict network to static clients  
 ✅ [WireGuard support](https://docs.raspap.com/wireguard/)  
⚙️ Traffic shaping (in progress)  

Look for the list above to grow as we add more exclusive features. 

### Funding targets
Below is a list of funding targets. When a funding target is reached, the features that are tied to it are merged back into RaspAP and released to the public for general availability.

#### $500 
The first **Insiders Edition** includes the exclusive features listed above.

### Frequently asked questions

#### Upgrading
*I have an existing RaspAP installation. How do I upgrade to Insiders?*

Upgrading is easy. Simply invoke the [Quick Installer](https://docs.raspap.com/quick/) with the `--upgrade` switch, specifying the private Insiders repo, like so:

```
curl -sL https://install.raspap.com | bash -s -- --upgrade --repo raspap/raspap-insiders
```

If you haven't [added SSH keys to your GitHub account](https://docs.github.com/en/github/authenticating-to-github/connecting-to-github-with-ssh) you will be prompted to authenticate. If so, just enter your GitHub credentials during the install:

```
RaspAP Install: Cloning latest files from github
Cloning into '/tmp/raspap-webgui'...
Username for 'https://github.com': octocat
Password for 'https://octocat@github.com': 
```

> ℹ️  **Note**: your password is sent securely via SSH to GitHub. The above prompt is actually from GitHub, so the installer does _not_ know your credentials.

#### Terms
*We're using RaspAP for a commercial project. Can we use Insiders under the same terms and conditions?*

Yes. Whether you're an individual or a company, you may use RaspAP Insiders precisely under the same terms as RaspAP, which are defined by the GNU GPL 3.0 license. However, we kindly ask you to respect the following guidelines:

* Please **don't distribute the source code** of Insiders. You may freely use it for public, private or commercial projects, fork it, mirror it, do whatever you want with it, but please don't release the source code, as it would counteract the sponsorware strategy.
* If you cancel your subscription, you're removed as a collaborator and will miss out on future updates of Insiders. However, you may *use the latest version* that's available to you as long as you like. Just remember that [GitHub deletes private forks](https://docs.github.com/en/github/setting-up-and-managing-your-github-user-account/removing-a-collaborator-from-a-personal-repository).

