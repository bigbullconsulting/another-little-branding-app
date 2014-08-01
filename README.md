another-little-branding-app
===========================

A little branding app.

The scenario is this:

We have the need to build a "branding" web service endpoint.  The branding service will be used by a mobile device which takes a single parameter: a URL, or part of a URL submitted by a human. It should return some metadata associated with the site, in order to properly brand the app on the mobile device.

 

The returns are:

 

name: Description of the site.  E.g. Engage University

logo: URL of logo.  E.g. http://example.com/logo.png

url: Full URL of the site E.g. http://example.com/engage

 

or null in the case of a miss.  The return data should be in JSON, and the endpoint should be REST (http GET is sufficient in this case, as the endpoint does not require authentication).  To be explicit, no data needs to be rendered, etc, you simply need to return three key value pairs.
