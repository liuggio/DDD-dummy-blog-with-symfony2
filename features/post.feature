@posts
Feature: Posts
  In order to create blog-post
  As a blog Author
  I want to be able to manage Posts

  Scenario: Create a new blog post
    Given I am an author
    When I fill in the following:
      |  First Post | Great Description |
    Then the "First Post" post should be saved.

  Scenario: Publish a blog post
    Given I am an author
    And I have a post with "First Post" and "Great Description" as description
    When I publish the "First Post" post
    Then the "First Post" post should be public.

  Scenario: List of all my posts
    Given I am an author
    And I have written the following:
      |  First Post | Great Description |
      |  Second Post | Bad Description |
    When I see the list of all my post
    Then the "First Post" and the "Second Post" should be shown.