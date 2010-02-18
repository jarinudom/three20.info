/**
 * The home page js for github commits.
 */

$(document).ready(function() {

  var repo = new GitHub.Repo('facebook', 'three20');

  repo.issues('open', function(issues) {
    console.log(issues);
    for (var ix = 0; ix < issues.length; ++ix) {
      var issue = issues[ix];
      console.log('#### [Bug Report #'+issue.number+'](http://github.com/facebook/three20/issues#issue/'+issue.number+'): '+issue.title);
    }
  });

});
