CREATE DATABASE finaldb;
USE [finaldb]
GO

CREATE TABLE 'auth' (
    [userid]       INT          IDENTITY (1, 1) NOT NULL,
    [username] VARCHAR (60) NOT NULL,
    [password] VARCHAR (60) NOT NULL,
    [firstName] VARCHAR (60) NOT NULL,
    [lastName] VARCHAR (60) NOT NULL,
    [email]    VARCHAR (60) NOT NULL,
    [phone] VARCHAR (60) NOT NULL,
    CONSTRAINT [PK_user] PRIMARY KEY CLUSTERED ([userid] ASC) 
);

GO

CREATE PROCEDURE 'addUser'
/*
 Procedure that adds a user to our auth table. 
*/
@userid INT, @username VARCHAR(60), @password VARCHAR(60), @firstName(60), @lastName(60),
@email VARCHAR(60), @phone VARCHAR(60)

AS
BEGIN

INSERT INTO [finaldb].[auth]
        ([userid]
		   ,[username]
       ,[password]
       ,[firstName]
		   ,[lastName]
		   ,[email]
		   ,[phone])
     VALUES
       (@userid,
		   @username,
		   @password,
       @firstName,
       @lastName,
       @email,
		   @phone)

END